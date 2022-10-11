<?php

namespace App\Filament\Resources\PermissionRoleResource\Pages;

use App\Filament\Resources\PermissionRoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermissionRole extends EditRecord
{
    protected static string $resource = PermissionRoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
