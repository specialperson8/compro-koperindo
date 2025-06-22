<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

use App\Models\Post;
use App\Models\Product;
use App\Models\Career;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
         return [
            Stat::make('Total Artikel', Post::count())
                ->description('Jumlah semua artikel yang dipublikasikan')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success'),

            Stat::make('Total Produk', Product::count())
                ->description('Jumlah semua produk di katalog')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('warning'),

            Stat::make('Lowongan Aktif', Career::where('is_active', true)->count())
                ->description('Jumlah lowongan kerja yang sedang dibuka')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('info'),
        ];
    }
}
