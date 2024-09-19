<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderServiceResource\Pages;
use App\Filament\Resources\OrderServiceResource\RelationManagers;
use App\Models\OrderService;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderServiceResource extends Resource
{
    protected static ?string $model = OrderService::class;

    public static function getNavigationLabel(): string
    {
        return 'Сопутствующие услуги';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основная информация')->schema([
                    Tabs::make('tabs')
                        ->tabs([
                            Tabs\Tab::make('Основная информация (Русский)')->schema([
                                TextInput::make('name_ru')
                                    ->label('Название услуги')
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
                                    ->label('Название услуги')
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
                    FileUpload::make('image')
                        ->image()
                        ->directory('other-service')
                        ->label('Изображение'),
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

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name_ru')
                    ->label('Название класса'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ReplicateAction::make() // Добавляем действие дублирования
                    ->label('Дублировать'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListOrderServices::route('/'),
            'create' => Pages\CreateOrderService::route('/create'),
            'edit' => Pages\EditOrderService::route('/{record}/edit'),
        ];
    }
}
