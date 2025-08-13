<?php

namespace App\Filament\Manager\Resources\Students\Pages;

use App\Filament\Manager\Resources\Students\StudentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;
}
