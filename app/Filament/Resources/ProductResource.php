<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Set;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-c-shopping-cart';

    protected static ?string $navigationGroup = 'Manajemen Produk';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Section::make('Informasi Produk')
                ->schema([
                    TextInput::make('name')
                        ->label('Nama Produk')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (string $operation, $state, Set $set) {
                            if ($operation === 'create') {
                                // Hapus karakter spesial sebelum membuat slug
                                $cleanedState = preg_replace('/[^A-Za-z0-9\s-]/', '', $state);
                                $set('slug', Str::slug($cleanedState));
                            }
                        }),

                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->disabled()
                        ->dehydrated() // <-- Pastikan nilai tetap dikirim meskipun disabled
                        ->unique(Product::class, 'slug', ignoreRecord: true),

                    Select::make('product_category_id')
                        ->label('Kategori Produk')
                        ->relationship('productCategory', 'name')
                        ->searchable()
                        ->preload()
                        ->required(),
                ])->columns(2),

            Section::make('Media & Status')
                ->schema([
                    FileUpload::make('main_image')
                        ->label('Gambar Utama')
                        ->image()
                        ->directory('product-images')
                        ->required(),

                    Toggle::make('is_featured')
                        ->label('Tampilkan di Halaman Depan?')
                        ->helperText('Jika aktif, produk ini akan muncul sebagai produk unggulan.'),
                ]),

            Section::make('Deskripsi')
                ->schema([
                    RichEditor::make('description') // <-- MENGGANTI Textarea DENGAN RichEditor
                        ->label('Deskripsi Lengkap Produk')
                        ->required()
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('product-descriptions')
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsVisibility('public'),
                ]),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('main_image'),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
