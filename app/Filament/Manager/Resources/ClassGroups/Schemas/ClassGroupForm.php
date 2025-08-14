<?php

namespace App\Filament\Manager\Resources\ClassGroups\Schemas;

use App\Enums\Turn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('course_id')
                    ->required()
                    ->numeric(),
                TextInput::make('classroom_id')
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                Select::make('turn')
                    ->label('Turno')
                    ->options(Turn::class)
                    ->required()
                    ->default(Turn::Morning->value),
                TextInput::make('school_year')
                    ->required()
                    ->numeric(),
            ]);
    }
}
