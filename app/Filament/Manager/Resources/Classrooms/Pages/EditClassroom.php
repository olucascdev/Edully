<?php

namespace App\Filament\Manager\Resources\Classrooms\Pages;

use App\Filament\Manager\Resources\Classrooms\ClassroomResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClassroom extends EditRecord
{
    protected static string $resource = ClassroomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
