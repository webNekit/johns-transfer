<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarClassResource\Pages;
use App\Filament\Resources\CarClassResource\RelationManagers;
use App\Models\CarClass;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarClassResource extends Resource
{
    protected static ?string $model = CarClass::class;

    public static function getNavigationLabel(): string
    {
        return 'Классы авто';
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основная информация')
                    ->schema([
                        Tabs::make('Tabs')
                            ->tabs([
                                Tabs\Tab::make('Название класса (Русский)')
                                    ->schema([
                                        TextInput::make('name_ru')
                                        ->label('Название')
                                        ->required()
                                    ]),
                                Tabs\Tab::make('Название класса (Английский)')
                                    ->schema([
                                        TextInput::make('name_en')
                                        ->label('Название')
                                        ->required()
                                    ]),
                            ]),
                    ]),
                Section::make('Медиа')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('classs')
                            ->label('Изображение'),
                        Toggle::make('is_active')
                            ->label('Активен')
                            ->default(false),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
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
            'index' => Pages\ListCarClasses::route('/'),
            'create' => Pages\CreateCarClass::route('/create'),
            'edit' => Pages\EditCarClass::route('/{record}/edit'),
        ];
    }
}
