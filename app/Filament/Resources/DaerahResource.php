<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Daerah;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DaerahResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DaerahResource\RelationManagers;

class DaerahResource extends Resource
{
    protected static ?string $model = Daerah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_daerah')
                ->required(),

                TextInput::make('provinsi')
                ->required(),

                TextInput::make('luas_daerah')
                ->required()
                ->numeric()
                ->prefix('Km'),

                TextInput::make('populasi')
                ->required()
                ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_daerah'),

                TextColumn::make('provinsi'),
                TextColumn::make('luas_daerah'),
                TextColumn::make('populasi'),
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
            'index' => Pages\ListDaerah::route('/'),
            'create' => Pages\CreateDaerah::route('/create'),
            'edit' => Pages\EditDaerah::route('/{record}/edit'),
        ];
    }
}
