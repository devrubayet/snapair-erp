<?php

namespace App\Filament\Pages;

use App\Models\SiteInfo;
use Filament\Forms;
use Filament\Schemas\Schema; // নতুন স্কিমা ক্লাস
use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Illuminate\Support\Facades\Cache;
use Filament\Notifications\Notification;
use BackedEnum;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;

class ManageSiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Site Settings';

    protected string $view = 'filament.pages.manage-site-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $siteInfo = SiteInfo::first();

        if ($siteInfo) {
            $this->form->fill($siteInfo->attributesToArray());
        } else {
            $this->form->fill();
        }
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Settings')
                    ->tabs([
                        Tab::make('General Info')
                            ->schema([
                                Forms\Components\TextInput::make('site_name')->maxLength(255),
                                Forms\Components\TextInput::make('site_tagline')->maxLength(255),
                                Forms\Components\TextInput::make('tagline_travel')->maxLength(255),
                                Forms\Components\FileUpload::make('logo')->image()->directory('settings')->disk('public'),
                                Forms\Components\FileUpload::make('favicon')->image()->directory('settings'),
                                Forms\Components\FileUpload::make('footer_logo')->image()->directory('settings'),
                                Forms\Components\FileUpload::make('og_image')->image()->directory('settings'),
                            ]),
                        Tab::make('Business & About')
                            ->schema([
                                Forms\Components\TextInput::make('trade_license')->maxLength(100),
                                Forms\Components\TextInput::make('civil_no')->maxLength(500),
                                Forms\Components\TextInput::make('iata_number')->maxLength(100),
                                Forms\Components\RichEditor::make('about_short')->columnSpanFull(),
                                Forms\Components\RichEditor::make('about_full')->columnSpanFull(),
                            ]),
                        Tab::make('Contact & Address')
                            ->schema([
                                Forms\Components\TextInput::make('phone_primary')->maxLength(50),
                                Forms\Components\TextInput::make('phone_secondary')->maxLength(50),
                                Forms\Components\TextInput::make('whatsapp_number')->maxLength(50),
                                Forms\Components\TextInput::make('email')->email()->maxLength(255),
                                Forms\Components\TextInput::make('support_email')->email()->maxLength(255),
                                Forms\Components\TextInput::make('address_line')->maxLength(255),
                                Forms\Components\TextInput::make('city')->maxLength(100),
                                Forms\Components\TextInput::make('country')->maxLength(100),
                                Forms\Components\Textarea::make('google_map_embed')->columnSpanFull(),
                            ]),
                        Tab::make('Social Links')
                            ->schema([
                                Forms\Components\TextInput::make('facebook')->url(),
                                Forms\Components\TextInput::make('instagram')->url(),
                                Forms\Components\TextInput::make('youtube')->url(),
                                Forms\Components\TextInput::make('tiktok')->url(),
                                Forms\Components\TextInput::make('linkedin')->url(),
                            ]),
                        Tab::make('SEO & Others')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')->maxLength(255),
                                Forms\Components\Textarea::make('meta_description'),
                                Forms\Components\Textarea::make('meta_keywords'),
                                Forms\Components\Textarea::make('footer_text'),
                                Forms\Components\TextInput::make('copyright_text')->maxLength(255),
                            ]),
                    ])->columnSpanFull(),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        $siteInfo = SiteInfo::first();

        if (!$siteInfo) {
            SiteInfo::create($data);
        } else {
            $siteInfo->update($data);
        }

        Cache::forget('site_settings');

        Notification::make()
            ->success()
            ->title('Settings updated successfully!')
            ->send();
    }
}