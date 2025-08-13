<?php

namespace App\Filament\Manager\Resources\Subjects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SubjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->label('Nome da Matéria')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            ]);
    }
}
