<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PermissionRoleResource\Pages;
use App\Filament\Resources\PermissionRoleResource\RelationManagers;
use App\Models\PermissionRole;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PermissionRoleResource extends Resource
{
    protected static ?string $model = PermissionRole::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('model'),
                Select::make('role_id')
                    ->relationship('role', 'name'),
                Select::make('permission_id')
                    ->relationship('permission', 'name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('model'),
                SelectColumn::make('role_id'),
                SelectColumn::make('permission_id')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPermissionRoles::route('/'),
            'create' => Pages\CreatePermissionRole::route('/create'),
            'edit' => Pages\EditPermissionRole::route('/{record}/edit'),
        ];
    }
}
