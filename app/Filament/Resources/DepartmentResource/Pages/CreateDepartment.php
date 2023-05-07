<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use Filament\Pages\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\DepartmentResource;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Departamento Registrado')
        ->body('El Departamento ha sido registrado exitosamente!!');
}
}
