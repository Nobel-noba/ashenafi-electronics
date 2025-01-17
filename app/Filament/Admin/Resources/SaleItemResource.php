<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SaleItemResource\Pages;
use App\Models\SaleItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SaleItemResource extends Resource
{
    protected static ?string $model = SaleItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('description')->required(),
                Forms\Components\TextInput::make('total')->required(),
                Forms\Components\TextInput::make('quantity')->numeric()->required(),
                Forms\Components\Select::make('sale_id')->nullable()->required()->relationship('sale', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')->searchable(),
                Tables\Columns\TextColumn::make('total')->searchable(),

            ])
            ->filters([

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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSaleItems::route('/'),
            'create' => Pages\CreateSaleItem::route('/create'),
            'edit' => Pages\EditSaleItem::route('/{record}/edit'),
        ];
    }
}
