<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\TikTokService;
use App\Models\TiktokPost;
use Carbon\Carbon;

class FetchTikTokVideos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tiktok:fetch-videos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
        public function handle(TikTokService $tiktokService)
    {
        $this->info('Fetching latest videos from TikTok...');
        $videos = $tiktokService->getLatestVideos();

        if ($videos) {
            foreach ($videos as $video) {
                TiktokPost::updateOrCreate(
                    ['tiktok_id' => $video['id']],
                    [
                        'caption' => $video['video_description'] ?? '',
                        'cover_image_url' => $video['cover_image_url'],
                        'share_url' => $video['share_url'],
                        'like_count' => $video['like_count'],
                        'comment_count' => $video['comment_count'],
                        'share_count' => $video['share_count'],
                        'view_count' => $video['view_count'],
                        'posted_at' => Carbon::createFromTimestamp($video['create_time']),
                    ]
                );
            }
            $this->info('Successfully fetched and stored ' . count($videos) . ' videos.');
        } else {
             $this->error('Failed to fetch videos. Check storage/logs/laravel.log for details.');
        }
        return 0;
    }

    protected function schedule(Schedule $schedule): void
{
    // Jalankan command setiap jam
    $schedule->command('tiktok:fetch-videos')->hourly();
}
}
