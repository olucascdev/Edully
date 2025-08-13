<?php

namespace App\Filament\Manager\Resources\Students\Pages;

use App\Filament\Manager\Resources\Students\StudentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Novo Estudante'),
        ];
    }
}
