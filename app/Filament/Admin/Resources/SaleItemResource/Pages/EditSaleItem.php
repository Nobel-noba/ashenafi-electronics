<?php

namespace App\Filament\Admin\Resources\SaleItemResource\Pages;

use App\Filament\Admin\Resources\SaleItemResource;
use Filament\Resources\Pages\EditRecord;

class EditSaleItem extends EditRecord
{
    protected static string $resource = SaleItemResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
