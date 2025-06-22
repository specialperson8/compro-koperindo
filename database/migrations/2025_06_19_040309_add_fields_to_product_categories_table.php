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
        Schema::table('product_categories', function (Blueprint $table) {

            $table->text('description')->nullable()->after('slug');
            $table->string('banner_image')->nullable()->after('description');

            if (!Schema::hasColumn('product_categories', 'icon_path')) {
                $table->string('icon_path')->nullable()->after('banner_image');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('product_categories', function (Blueprint $table) {
            $table->dropColumn(['description', 'banner_image']);

        });
    }
};
