<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StockItemResource\Pages;
use App\Filament\Resources\StockItemResource\RelationManagers;
use App\Models\StockItem;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StockItemResource extends Resource
{
    protected static ?string $model = StockItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('code')->required(),
                Select::make('unit')
                    ->options([
                        'Gram' => 'gram',
                        'Piece' => 'piece',
                        'Box' => 'box',
                    ])->default('box'),
                Checkbox::make('is_refrigerated'),
                TextInput::make('quantity')
                    ->numeric(),
                Select::make('stock_id')
                    ->relationship('stock', 'name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('quantity'),
                Tables\Columns\TextColumn::make('unit'),
                Tables\Columns\IconColumn::make('is_refrigerated'),
                Tables\Columns\IconColumn::make('is_refrigerated')->boolean()
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
            'index' => Pages\ListStockItems::route('/'),
            'create' => Pages\CreateStockItem::route('/create'),
            'edit' => Pages\EditStockItem::route('/{record}/edit'),
        ];
    }
}
