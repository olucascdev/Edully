<?php

namespace App\Filament\Manager\Resources\Subjects\Pages;

use App\Filament\Manager\Resources\Subjects\SubjectResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\Width;

class ListSubjects extends ListRecords
{
    protected static string $resource = SubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->modalWidth(Width::Large)
                ->label('Nova Matéria'),
        ];
    }
}
