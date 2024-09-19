<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingsResource\Pages;
use App\Filament\Resources\SiteSettingsResource\RelationManagers;
use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\ValidationException;

class SiteSettingsResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    public static function getNavigationLabel(): string
    {
        return 'Настройки сайта';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canCreate(): bool
    {
        return SiteSetting::count() === 0;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Раздел - Главная секция')
                    ->schema([
                        Forms\Components\Tabs::make('hero')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('hero_title_ru')
                                            ->label('Заголовок (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('hero_title_en')
                                            ->label('Заголовок (EN)')
                                            ->required(),
                                    ]),
                            ]),
                        Forms\Components\FileUpload::make('hero_image')
                            ->label('Изображение')
                            ->directory('hero_images')
                            ->image(),
                    ]),

                // Catalog Section
                Forms\Components\Section::make('Раздел - Парк автомобилей')
                    ->schema([
                        Forms\Components\Tabs::make('catalog')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('catalog_title_ru')
                                            ->label('Заголовок (RU)')
                                            ->required(),
                                        Forms\Components\Textarea::make('catalog_description_ru')
                                            ->label('Описание (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('catalog_title_en')
                                            ->label('Заголовок (EN)')
                                            ->required(),
                                        Forms\Components\Textarea::make('catalog_description_en')
                                            ->label('Описание (EN)')
                                            ->required(),
                                    ]),
                            ]),
                    ]),

                // Process Section
                Forms\Components\Section::make('Раздел - Процесс работы')
                    ->schema([
                        Forms\Components\Tabs::make('process')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('process_title_ru')
                                            ->label('Заголовок (RU)')
                                            ->required(),
                                        Forms\Components\Textarea::make('process_description_ru')
                                            ->label('Описание (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('process_title_en')
                                            ->label('Заголовок (EN)')
                                            ->required(),
                                        Forms\Components\Textarea::make('process_description_en')
                                            ->label('Описание (EN)')
                                            ->required(),
                                    ]),
                            ]),
                            Forms\Components\Repeater::make('process_items')
                            ->label('Стадии работы')
                            ->schema([
                                Forms\Components\Tabs::make('process_items')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('RU')
                                            ->schema([
                                                Forms\Components\TextInput::make('item_title_ru')
                                                    ->label('Название (RU)')
                                                    ->required(),
                                                Forms\Components\Textarea::make('item_description_ru')
                                                    ->label('Описание (RU)')
                                                    ->required(),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('EN')
                                            ->schema([
                                                Forms\Components\TextInput::make('item_title_en')
                                                    ->label('Название (EN)')
                                                    ->required(),
                                                Forms\Components\Textarea::make('item_description_en')
                                                    ->label('Описание (EN)')
                                                    ->required(),
                                            ]),
                                    ]),
                            ]),
                    ]),

                // Advantages Section
                Forms\Components\Section::make('Раздел - Преимущества')
                    ->schema([
                        Forms\Components\Tabs::make('advantages')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('advantages_title_ru')
                                            ->label('Заголовок (RU)')
                                            ->required(),
                                        Forms\Components\Textarea::make('advantages_description_ru')
                                            ->label('Описание (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('advantages_title_en')
                                            ->label('Заголовок (EN)')
                                            ->required(),
                                        Forms\Components\Textarea::make('advantages_description_en')
                                            ->label('Описание (EN)')
                                            ->required(),
                                    ]),
                            ]),
                            Forms\Components\Repeater::make('advantages_items')
                            ->label('Элементы преимуществ')
                            ->schema([
                                Forms\Components\Tabs::make('advantages_items')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('RU')
                                            ->schema([
                                                Forms\Components\TextInput::make('item_title_ru')
                                                    ->label('Название (RU)')
                                                    ->required(),
                                                Forms\Components\Textarea::make('item_description_ru')
                                                    ->label('Описание (RU)')
                                                    ->required(),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('EN')
                                            ->schema([
                                                Forms\Components\TextInput::make('item_title_en')
                                                    ->label('Название (EN)')
                                                    ->required(),
                                                Forms\Components\Textarea::make('item_description_en')
                                                    ->label('Описание (EN)')
                                                    ->required(),
                                            ]),
                                    ]),
                            ]),
                    ]),

                // About Section
                Forms\Components\Section::make('Раздел - о нас')
                    ->schema([
                        Forms\Components\Tabs::make('about')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('about_title_ru')
                                            ->label('Заголовок (RU)')
                                            ->required(),
                                        Forms\Components\Textarea::make('about_description_ru')
                                            ->label('Описание (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('about_title_en')
                                            ->label('Заголовок (EN)')
                                            ->required(),
                                        Forms\Components\Textarea::make('about_description_en')
                                            ->label('Описание (EN)')
                                            ->required(),
                                    ]),
                            ]),
                            Forms\Components\FileUpload::make('about_image')
                            ->label('Изображение')
                            ->directory('about')
                            ->maxSize(6144)
                            ->image(),
                            Forms\Components\Repeater::make('about_requirements')
                            ->label('Требования')
                            ->schema([
                                Forms\Components\Tabs::make('about_requirements')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('RU')
                                            ->schema([
                                                Forms\Components\TextInput::make('requirement_title_ru')
                                                    ->label('Заголовок (RU)')
                                                    ->required(),
                                                Forms\Components\Textarea::make('requirement_description_ru')
                                                    ->label('Описание (RU)')
                                                    ->required(),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('EN')
                                            ->schema([
                                                Forms\Components\TextInput::make('requirement_title_en')
                                                    ->label('Заголовок (EN)')
                                                    ->required(),
                                                Forms\Components\Textarea::make('requirement_description_en')
                                                    ->label('Описание (EN)')
                                                    ->required(),
                                            ]),
                                    ]),
                            ]),
                    ]),

                // Articles Section
                Forms\Components\Section::make('Раздел - статьи')
                    ->schema([
                        Forms\Components\Tabs::make('articles')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('articles_title_ru')
                                            ->label('Заголовок (RU)')
                                            ->required(),
                                        Forms\Components\Textarea::make('articles_description_ru')
                                            ->label('Описание (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('articles_title_en')
                                            ->label('Заголовок (EN)')
                                            ->required(),
                                        Forms\Components\Textarea::make('articles_description_en')
                                            ->label('Описание (EN)')
                                            ->required(),
                                    ]),
                            ]),
                    ]),

                // Cooperation Section
                Forms\Components\Section::make('Раздел - сотрудничество')
                    ->schema([
                        Forms\Components\Tabs::make('cooperation')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('cooperation_title_ru')
                                            ->label('Заголовок (RU)')
                                            ->required(),
                                        Forms\Components\Textarea::make('cooperation_description_ru')
                                            ->label('Описание (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('cooperation_title_en')
                                            ->label('Заголовок (EN)')
                                            ->required(),
                                        Forms\Components\Textarea::make('cooperation_description_en')
                                            ->label('Описание (EN)')
                                            ->required(),
                                    ]),
                            ]),
                    ]),

                // Questions Section
                Forms\Components\Section::make('Раздел - вопрос-ответ')
                    ->schema([
                        Forms\Components\Tabs::make('questions')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\TextInput::make('question_title_ru')
                                            ->label('Заголовок (RU)')
                                            ->required(),
                                        Forms\Components\Textarea::make('question_description_ru')
                                            ->label('Описание (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('question_title_en')
                                            ->label('Заголовок (EN)')
                                            ->required(),
                                        Forms\Components\Textarea::make('question_description_en')
                                            ->label('Описание (EN)')
                                            ->required(),
                                    ]),
                            ]),
                    ]),

                // Contact Information Section
                Forms\Components\Section::make('Контактная информация')
                    ->schema([
                        Forms\Components\Repeater::make('contact_phones')
                            ->label('Телефоны')
                            ->schema([
                                Forms\Components\TextInput::make('phone')
                                    ->label('Номер телефона')
                                    ->required(),
                            ]),
                        Forms\Components\Repeater::make('contact_emails')
                            ->label('Email адреса')
                            ->schema([
                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required(),
                            ]),
                        Forms\Components\TextInput::make('contact_address')
                            ->label('Адрес')
                            ->required(),
                        Forms\Components\TextInput::make('contact_map_link')
                            ->label('Ссылка на карту')
                            ->required(),
                        Forms\Components\Repeater::make('social_links')
                            ->label('Ссылки на соц.сети')
                            ->schema([
                                Forms\Components\TextInput::make('link')
                                    ->label('Ссылка')
                                    ->required(),
                                Forms\Components\FileUpload::make('icon')
                                    ->label('Иконка соц.сети')
                                    ->directory('icon')
                                    ->image(),
                            ]),
                        Forms\Components\TextInput::make('whatsapp_title')
                            ->label('Заголовок WhatsApp')
                            ->required(),
                        Forms\Components\TextInput::make('whatsapp_link')
                            ->label('Ссылка на WhatsApp')
                            ->required(),
                    ]),

                // General Information Section
                Forms\Components\Section::make('Общие настройки')
                    ->schema([
                        Forms\Components\TextInput::make('site_name')
                            ->label('Название сайта')
                            ->required(),
                        Forms\Components\FileUpload::make('site_logo')
                            ->label('Логотип сайта')
                            ->directory('site_logos')
                            ->image(),
                        Forms\Components\Tabs::make('site_description')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('RU')
                                    ->schema([
                                        Forms\Components\Textarea::make('site_description_ru')
                                            ->label('Описание сайта (RU)')
                                            ->required(),
                                    ]),
                                Forms\Components\Tabs\Tab::make('EN')
                                    ->schema([
                                        Forms\Components\Textarea::make('site_description_en')
                                            ->label('Описание сайта (EN)')
                                            ->required(),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('custom')
                    ->label('Настройка сайта и общая информация')
                    ->getStateUsing(fn ($record) => 'Настройки сайта')
                    ->sortable(false),
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
            ]);
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        // Проверка на наличие записи
        if (SiteSetting::exists()) {
            throw ValidationException::withMessages([
                'global' => 'Настройки сайта уже существуют. Вы можете редактировать существующую запись.',
            ]);
        }

        return $data;
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
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSettings::route('/create'),
            'edit' => Pages\EditSiteSettings::route('/{record}/edit'),
        ];
    }
}
