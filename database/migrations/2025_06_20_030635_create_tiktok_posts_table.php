<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tiktok_posts', function (Blueprint $table) {
            $table->id();
            $table->string('tiktok_id')->unique(); // ID unik dari video di TikTok
            $table->text('caption')->nullable();
            $table->string('cover_image_url'); // URL untuk gambar thumbnail/cover
            $table->string('share_url'); // URL untuk share/link ke post asli
            $table->integer('like_count')->default(0);
            $table->integer('comment_count')->default(0);
            $table->integer('share_count')->default(0);
            $table->integer('view_count')->default(0);
            $table->timestamp('posted_at')->nullable(); // Waktu video diposting
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiktok_posts');
    }
};
