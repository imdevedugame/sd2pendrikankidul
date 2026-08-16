<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuLinkResource\Pages;
use App\Filament\Resources\MenuLinkResource\RelationManagers;
use App\Models\MenuLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuLinkResource extends Resource
{
    protected static ?string $model = MenuLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\TextInput::make('title')->required(),
                \Filament\Forms\Components\TextInput::make('url')->required()->url(),
                \Filament\Forms\Components\Select::make('type')->options([
                    'pengumuman' => 'Pengumuman / Lomba',
                    'ppdb' => 'Link PPDB'
                ])->required(),
                \Filament\Forms\Components\TextInput::make('order')->numeric()->default(0),
                \Filament\Forms\Components\Toggle::make('is_active')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('title'),
                \Filament\Tables\Columns\TextColumn::make('type'),
                \Filament\Tables\Columns\TextColumn::make('url')->limit(30),
                \Filament\Tables\Columns\IconColumn::make('is_active')->boolean(),
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
            'index' => Pages\ListMenuLinks::route('/'),
            'create' => Pages\CreateMenuLink::route('/create'),
            'edit' => Pages\EditMenuLink::route('/{record}/edit'),
        ];
    }
}
