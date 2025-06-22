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
        Schema::table('tiktok_posts', function (Blueprint $table) {
            $table->text('cover_image_url')->change();
            $table->text('share_url')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tiktok_posts', function (Blueprint $table) {
            $table->string('cover_image_url')->change();
            $table->string('share_url')->change();
        });
    }
};
