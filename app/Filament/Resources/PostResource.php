<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;


class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Manajemen Blog';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Informasi Utama')
                ->schema([
                    TextInput::make('title')
                        ->label('Judul Artikel')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true) // <-- live() untuk update real-time
                        ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                    TextInput::make('slug')
                        ->label('Slug (URL)')
                        ->required()
                        ->maxLength(255)
                        ->disabled() // <-- Slug dibuat otomatis, jadi di-disable
                        ->dehydrated()
                        ->unique(Post::class, 'slug', ignoreRecord: true),

                    Textarea::make('excerpt')
                        ->label('Ringkasan Artikel (Excerpt)')
                        ->rows(3)
                        ->helperText('Ringkasan singkat yang akan muncul di daftar berita.'),
                ])->columns(2), // <-- Membuat section ini menjadi 2 kolom

            Section::make('Konten & Gambar')
                ->schema([
                    RichEditor::make('content')
                        ->label('Isi Artikel')
                        ->required()
                        ->columnSpanFull(),

                    FileUpload::make('thumbnail_path')
                        ->label('Gambar Thumbnail')
                        ->image()
                        ->directory('post-thumbnails'),
                ]),

            Section::make('Kategori & Penulis')
                ->schema([
                    Select::make('post_category_id')
                        ->label('Kategori')
                        ->relationship('postCategory', 'name') // <-- Relasi ke PostCategory
                        ->searchable()
                        ->preload()
                        ->required(),

                    Select::make('user_id')
                        ->label('Penulis')
                        ->relationship('user', 'name') // <-- Relasi ke User
                        ->searchable()
                        ->preload()
                        ->required()
                        ->default(auth()->id()), // <-- Otomatis pilih user yang sedang login
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('post_category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thumbnail_path')
                    ->searchable(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
