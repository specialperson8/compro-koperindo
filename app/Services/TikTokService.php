<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Setting;

class TikTokService
{
    protected string $clientKey;
    protected string $clientSecret;
    protected string $redirectUri;

    public function __construct()
    {
        $this->clientKey = config('services.tiktok.client_key');
        $this->clientSecret = config('services.tiktok.client_secret');
        $this->redirectUri = config('services.tiktok.redirect_uri');
    }

    public function getAuthUrl(): string
    {
        $baseUrl = 'https://www.tiktok.com/v2/auth/authorize/';
        $scope = 'user.info.basic,video.list';

        $codeVerifier = Str::random(64);
        $codeChallenge = rtrim(strtr(base64_encode(hash('sha256', $codeVerifier, true)), '+/', '-_'), '=');
        session()->put('tiktok_code_verifier', $codeVerifier);

        $csrfState = bin2hex(random_bytes(16));
        session()->put('tiktok_auth_state', $csrfState);

        $params = [
            'client_key' => $this->clientKey,
            'scope' => $scope,
            'response_type' => 'code',
            'redirect_uri' => $this->redirectUri,
            'state' => $csrfState,
            'code_challenge' => $codeChallenge,
            'code_challenge_method' => 'S256',
        ];

        return $baseUrl . '?' . http_build_query($params);
    }

    public function getAccessToken(string $code): ?array
    {
        $url = 'https://open.tiktokapis.com/v2/oauth/token/';
        $codeVerifier = session()->pull('tiktok_code_verifier');

        $response = Http::asForm()->post($url, [
            'client_key' => $this->clientKey,
            'client_secret' => $this->clientSecret,
            'code' => $code,
            'grant_type' => 'authorization_code',
            'redirect_uri' => $this->redirectUri,
            'code_verifier' => $codeVerifier,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        \Log::error('TikTok Access Token Error: ' . $response->body());
        return null;
    }

    public function getLatestVideos()
{
    $accessToken = Setting::where('key', 'tiktok_access_token')->value('value');
    if (!$accessToken) {
        \Log::error('TikTok Access Token not found in settings.');
        return null;
    }

    // --- PERBAIKAN FINAL ---

    // 1. Definisikan field sebagai string untuk query parameter
    $fields = 'id,create_time,cover_image_url,share_url,video_description,like_count,comment_count,share_count,view_count';

    // 2. Buat URL lengkap dengan query parameter
    $url = 'https://open.tiktokapis.com/v2/video/list/?fields=' . urlencode($fields);

    // 3. Buat body JSON kosong. Beberapa API butuh ini untuk request POST.
    $emptyBody = json_encode(new \stdClass()); // Membuat objek JSON kosong: {}

    // 4. Lakukan request POST dengan header, token, dan body yang sangat eksplisit
    $response = Http::withToken($accessToken)
                    ->withBody($emptyBody, 'application/json') // <-- Mengirim body JSON kosong
                    ->post($url); // <-- Kirim ke URL yang sudah ada query parameter

    // -------------------------

    if ($response->successful() && isset($response->json()['data']['videos'])) {
        // Cek jika array videos tidak kosong
        if (count($response->json()['data']['videos']) > 0) {
            return $response->json()['data']['videos'];
        }
        // Jika array videos kosong, anggap sebagai sukses tapi tidak ada data baru
        \Log::info('TikTok fetch successful, but no new videos found.');
        return []; // Kembalikan array kosong
    }

    \Log::error('Failed to fetch TikTok videos. Status: ' . $response->status() . ' Body: ' . $response->body());
    return null;
}
}
