<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Filament\Notifications\Notification;
use Filament\Actions\Action;

class SiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static string $view = 'filament.pages.site-settings';
    protected static ?int $navigationSort = 99;
    protected static ?string $title = 'Site Settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        $this->form->fill($settings);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('About Teaser (Go Beyond Next)')
                    ->description('Pengaturan untuk section di bawah hero.')
                    ->schema([
                        TextInput::make('about_teaser_title')->label('Judul'),
                        Textarea::make('about_teaser_description')->label('Deskripsi')->rows(5),
                        TextInput::make('about_teaser_button_text')->label('Teks Tombol'),
                        TextInput::make('about_teaser_button_link')->label('Link Tombol (bisa internal /selengkapnya atau eksternal https://...)'),
                        FileUpload::make('about_teaser_image')->label('Gambar')->image()->directory('site-settings'),
                        TextInput::make('about_teaser_video_link')->label('Link Video YouTube (untuk tombol play)')->url(),
                    ])->columns(2),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        foreach ($data as $key => $value) {
            if ($value !== null) {
                Setting::updateOrCreate(['key' => $key], ['value' => $value]);
            }
        }
        Cache::forget('site_settings');
        Notification::make()->title('Settings saved successfully')->success()->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')->label('Save Changes')->submit('save'),
        ];
    }
}
