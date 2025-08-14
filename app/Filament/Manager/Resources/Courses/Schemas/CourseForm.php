<?php

namespace App\Filament\Manager\Resources\Courses\Schemas;

use App\Enums\Turn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255),
                TextInput::make('description')
                    ->label('Descrição')
                    ->maxLength(1000)
                    ->columnSpanFull(),

            ]);
    }
}
