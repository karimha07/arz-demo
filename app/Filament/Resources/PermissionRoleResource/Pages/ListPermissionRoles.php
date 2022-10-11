<?php

namespace App\Filament\Resources\PermissionRoleResource\Pages;

use App\Filament\Resources\PermissionRoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPermissionRoles extends ListRecords
{
    protected static string $resource = PermissionRoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
