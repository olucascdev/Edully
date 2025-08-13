<?php

namespace App\Filament\Manager\Resources\Students\Pages;

use App\Filament\Manager\Resources\Students\StudentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStudent extends EditRecord
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
