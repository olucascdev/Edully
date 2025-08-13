<?php

namespace App\Filament\Manager\Resources\Courses\Pages;

use App\Filament\Manager\Resources\Courses\CourseResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCourse extends CreateRecord
{
    protected static string $resource = CourseResource::class;
}
