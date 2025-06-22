<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Post;

class LatestPostsWidget extends BaseWidget
{
    protected static ?int $sort = 2; // Urutan widget, di bawah StatsOverview
    protected int | string | array $columnSpan = 'full'; // Agar widget ini memakai lebar penuh

    public function table(Table $table): Table
    {
        return $table
            ->query(Post::query()->latest()->limit(5)) // Ambil 5 post terbaru
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul Artikel'),
                Tables\Columns\TextColumn::make('postCategory.name')->label('Kategori'),
                Tables\Columns\TextColumn::make('created_at')->label('Tanggal Dibuat')->since(),
            ])
            ->actions([
                // Tambahkan tombol untuk langsung edit
                Tables\Actions\EditAction::make()->url(fn (Post $record): string => \App\Filament\Resources\PostResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
