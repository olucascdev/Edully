<?php

namespace App\Filament\Manager\Resources\Courses\Pages;

use App\Filament\Manager\Resources\Courses\CourseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCourse extends EditRecord
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
