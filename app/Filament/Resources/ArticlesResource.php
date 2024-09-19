<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticlesResource\Pages;
use App\Filament\Resources\ArticlesResource\RelationManagers;
use App\Models\Article;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticlesResource extends Resource
{
    protected static ?string $model = Article::class;

    public static function getNavigationLabel(): string
    {
        return 'Статьи и новости';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основная информация')->schema([
                    Tabs::make('tabs')->tabs([
                        Tabs\Tab::make('RU')->schema([
                            TextInput::make('title_ru')
                                ->label('Название')
                                ->required(),
                            Textarea::make('short_description_ru')
                                ->label('Краткое описание')
                                ->required(),
                            RichEditor::make('full_description_ru')
                                ->label('Полное описание')
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
                                ->required(),
                        ]),
                        Tabs\Tab::make('EN')->schema([
                            TextInput::make('title_en')
                                ->label('Название')
                                ->required(),
                            Textarea::make('short_description_en')
                                ->label('Краткое описание')
                                ->required(),
                            RichEditor::make('full_description_en')
                                ->label('Полное описание')
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
                                ->required(),
                        ]),
                    ]),
                ])->columnSpanFull(),
                Section::make('Изображение статьи')->schema([
                    FileUpload::make('image')
                    ->label('Изображение')
                    ->image()
                    ->directory('articles')
                    ->required(),
                ])->columnSpanFull(),
                Section::make('Мета-теги')->schema([
                    Tabs::make('tabs')->tabs([
                        Tabs\Tab::make('RU')->schema([
                            TextInput::make('keywords_ru')
                                ->label('Ключевые слова')
                                ->required(),
                        ]),
                        Tabs\Tab::make('EN')->schema([
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
                TextColumn::make('title_ru')
                    ->label('Название класса'),
                ImageColumn::make('image')
                    ->label('Изображение')
                    ->circular()
                    ->size(50),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticles::route('/create'),
            'edit' => Pages\EditArticles::route('/{record}/edit'),
        ];
    }
}
