<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCategoryResource\Pages;
use App\Filament\Resources\ProductCategoryResource\RelationManagers;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// Import semua komponen yang kita butuhkan
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;


class ProductCategoryResource extends Resource
{
    protected static ?string $model = ProductCategory::class;
    protected static ?string $navigationIcon = 'heroicon-s-tag';
    protected static ?string $navigationLabel = 'Kategori Produk';
    protected static ?string $navigationGroup = 'Manajemen Produk';
    protected static ?int $navigationSort = 1; // Tampilkan di atas Produk

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Kategori')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Kategori')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        TextInput::make('slug')
                            ->required()
                            ->disabled()
                            ->dehydrated()
                            ->unique(ProductCategory::class, 'slug', ignoreRecord: true),
                    ])->columns(2),

                Section::make('Konten Halaman Kategori')
                    ->schema([
                        RichEditor::make('description')
                            ->label('Deskripsi Kategori')
                            ->helperText('Deskripsi ini akan muncul di halaman landing kategori.')
                            ->columnSpanFull(),
                    ]),

                Section::make('Gambar')
                    ->schema([
                        FileUpload::make('icon_path')
                            ->label('Gambar Ikon')
                            ->helperText('Gambar ini akan muncul di kartu kategori di homepage.')
                            ->image()->directory('category-icons'),

                        FileUpload::make('banner_image')
                            ->label('Gambar Banner')
                            ->helperText('Gambar ini akan menjadi banner di halaman landing kategori.')
                            ->image()->directory('category-banners'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('icon_path')->label('Ikon'),
                TextColumn::make('name')->searchable(),
                TextColumn::make('slug')->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductCategories::route('/'),
            'create' => Pages\CreateProductCategory::route('/create'),
            'edit' => Pages\EditProductCategory::route('/{record}/edit'),
        ];
    }
}
