<?php

namespace App\Filament\Manager\Resources\ClassGroups\Pages;

use App\Filament\Manager\Resources\ClassGroups\ClassGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClassGroup extends EditRecord
{
    protected static string $resource = ClassGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
