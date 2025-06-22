<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Product;

class LatestProductsWidget extends BaseWidget
{
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Product::query()->latest()->limit(5)) // Ambil 5 produk terbaru
            ->columns([
                Tables\Columns\ImageColumn::make('main_image')->label('Gambar'),
                Tables\Columns\TextColumn::make('name')->label('Nama Produk'),
                Tables\Columns\TextColumn::make('productCategory.name')->label('Kategori'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->url(fn (Product $record): string => \App\Filament\Resources\ProductResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
