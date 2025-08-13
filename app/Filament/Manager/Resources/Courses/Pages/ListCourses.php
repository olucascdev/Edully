<?php

namespace App\Filament\Manager\Resources\Courses\Pages;

use App\Filament\Manager\Resources\Courses\CourseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\Width;

class ListCourses extends ListRecords
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->modalWidth(Width::Large)
                ->label('Novo Curso'),
        ];
    }
}
