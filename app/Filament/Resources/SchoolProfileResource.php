<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SchoolProfileResource\Pages;
use App\Filament\Resources\SchoolProfileResource\RelationManagers;
use App\Models\SchoolProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SchoolProfileResource extends Resource
{
    protected static ?string $model = SchoolProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\Section::make('Informasi Umum')->schema([
                    \Filament\Forms\Components\TextInput::make('name')->required(),
                    \Filament\Forms\Components\TextInput::make('email')->email(),
                    \Filament\Forms\Components\TextInput::make('phone'),
                    \Filament\Forms\Components\TextInput::make('youtube_url')->url(),
                    \Filament\Forms\Components\Textarea::make('address')->columnSpanFull(),
                    \Filament\Forms\Components\Textarea::make('map_iframe')->label('Peta (Google Maps Iframe)')->rows(3)->columnSpanFull(),
                ])->columns(2),
                \Filament\Forms\Components\Section::make('Profil & Sejarah')->schema([
                    \Filament\Forms\Components\Textarea::make('vision')->rows(3),
                    \Filament\Forms\Components\Textarea::make('mission')->rows(5),
                    \Filament\Forms\Components\Textarea::make('history')->rows(5)->columnSpanFull(),
                ])->columns(2),
                \Filament\Forms\Components\Section::make('Banner Depan')->schema([
                    \Filament\Forms\Components\TextInput::make('hero_title'),
                    \Filament\Forms\Components\TextInput::make('hero_subtitle'),
                    \Filament\Forms\Components\FileUpload::make('hero_image')->image()->directory('settings'),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('name'),
                \Filament\Tables\Columns\TextColumn::make('email'),
                \Filament\Tables\Columns\TextColumn::make('phone'),
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
            'index' => Pages\ListSchoolProfiles::route('/'),
            'create' => Pages\CreateSchoolProfile::route('/create'),
            'edit' => Pages\EditSchoolProfile::route('/{record}/edit'),
        ];
    }
}
