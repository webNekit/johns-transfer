<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarClassResource\Pages;
use App\Models\CarClass;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class CarClassResource extends Resource
{
    protected static ?string $model = CarClass::class;

    public static function getNavigationLabel(): string
    {
        return 'Классы авто';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Section::make('Основная информация')->schema([
                    Tabs::make('tabs')
                        ->tabs([
                            Tabs\Tab::make('Основная информация (Русский)')->schema([
                                TextInput::make('name_ru')
                                    ->label('Название класса')
                                    ->required(),
                                Textarea::make('short_info_ru')
                                    ->label('Кратка информация')
                                    ->autosize()
                                    ->required(),
                                RichEditor::make('full_info_ru')
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                                    ->label('Полная информация')
                                    ->required(),
                            ]),
                            Tabs\Tab::make('Основная информация (Английский)')->schema([
                                TextInput::make('name_en')
                                    ->label('Название класса')
                                    ->required(),
                                Textarea::make('short_info_en')
                                    ->label('Кратка информация')
                                    ->autosize()
                                    ->required(),
                                RichEditor::make('full_info_en')
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                                    ->label('Полная информация')
                                    ->required(),
                            ]),
                        ]),
                ])->columnSpanFull(),
                Section::make('Изображение и медиа')->schema([
                    FileUpload::make('icon')
                        ->image()
                        ->directory('classs/icon')
                        ->label('Иконка класса'),
                    FileUpload::make('image')
                        ->image()
                        ->directory('classs')
                        ->label('Изображение'),
                ])->columnSpanFull(),
                Section::make('Автомобили')->schema([
                    Repeater::make('cars')
                    ->label('Автомобили и цены')
                    ->schema([
                        Forms\Components\Select::make('car_id')
                            ->label('Авто')
                            ->options(Car::all()->mapWithKeys(function ($car) {
                                return [$car->id => "{$car->brand} - {$car->model} ({$car->year})"];
                            }))
                            ->required(),
                        TextInput::make('price_one')
                            ->label('Цена от часа')
                            ->numeric()
                            ->required(),
                        TextInput::make('price_two')
                            ->label('Цена от 12 часов')
                            ->numeric()
                            ->required(),
                        TextInput::make('price_three')
                            ->label('Трансфер')
                            ->numeric()
                            ->required(),
                    ])
                    ->columns(4)
                    ->cloneable() // Включаем возможность клонирования элемента
                ])->columnSpanFull(),
                Section::make('Мета-поля')->schema([
                    Tabs::make('tabs')
                        ->tabs([
                            Tabs\Tab::make('Ключевые слова (Русский)')->schema([
                                TextInput::make('keywords_ru')
                                ->label('Ключевые слова')
                                ->required(),
                            ]),
                            Tabs\Tab::make('Ключевые слова (Английский)')->schema([
                                TextInput::make('keywords_en')
                                ->label('Ключевые слова')
                                ->required(),
                            ]),
                        ]),
                ])->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Активен')
                    ->default(true),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('name_ru')
                    ->label('Название класса'),
                ImageColumn::make('image')
                    ->label('Изображение')
                    ->circular()
                    ->size(50),
                BooleanColumn::make('is_active')
                    ->label('Активен'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ReplicateAction::make() // Добавляем действие дублирования
                    ->label('Дублировать'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCarClasses::route('/'),
            'create' => Pages\CreateCarClass::route('/create'),
            'edit' => Pages\EditCarClass::route('/{record}/edit'),
        ];
    }
}
