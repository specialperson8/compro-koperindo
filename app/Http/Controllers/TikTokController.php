<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiktokPost;
use App\Services\TikTokService;
use App\Models\Setting;

class TikTokController extends Controller
{
     protected $tiktokService;

    public function __construct(TikTokService $tiktokService)
        {
            $this->tiktokService = $tiktokService;
        }

    /**
     * Mengarahkan user ke halaman otentikasi TikTok.
     */
    public function connect()
        {
            $authUrl = $this->tiktokService->getAuthUrl();
            return redirect()->away($authUrl);
        }

     public function callback(Request $request)
        {
            // Validasi state untuk keamanan CSRF
            if (empty($request->state) || ($request->state !== session()->pull('tiktok_auth_state'))) {
                return redirect('/')->with('error', 'Invalid state parameter.');
            }

            // Ambil authorization code
            $code = $request->code;

            // Tukar code dengan access token
           $tokenData = $this->tiktokService->getAccessToken($request->code);

            if ($tokenData) {
                Setting::updateOrCreate(['key' => 'tiktok_access_token'], ['value' => $tokenData['access_token']]);
                Setting::updateOrCreate(['key' => 'tiktok_refresh_token'], ['value' => $tokenData['refresh_token']]);
                Setting::updateOrCreate(['key' => 'tiktok_token_expires_at'], ['value' => now()->addSeconds($tokenData['expires_in'])]);
                Setting::updateOrCreate(['key' => 'tiktok_open_id'], ['value' => $tokenData['open_id']]);

                // Hapus cache setting agar yang baru bisa dibaca
                \Cache::forget('site_settings');

            return redirect('/')->with('success', 'Berhasil terhubung dengan TikTok! Data akan segera disinkronkan.');
            }


            return redirect('/')->with('error', 'Gagal mendapatkan akses token dari TikTok.');
        }
}
