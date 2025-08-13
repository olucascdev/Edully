<?php

namespace App\Filament\Manager\Resources\Students\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('address_id')
                    ->relationship('address', 'id')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('guardian')
                    ->required(),
                TextInput::make('student_phone')
                    ->tel()
                    ->required(),
                TextInput::make('guardian_phone')
                    ->tel()
                    ->required(),
                TextInput::make('cpf')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DatePicker::make('start_period')
                    ->required(),
                DatePicker::make('end_period')
                    ->required(),
                TextInput::make('total_students')
                    ->required()
                    ->numeric(),
                TextInput::make('tuition_value')
                    ->required()
                    ->numeric(),
                TextInput::make('installments_qty')
                    ->required()
                    ->numeric(),
                TextInput::make('due_day')
                    ->required()
                    ->numeric(),
                TextInput::make('uniform_size')
                    ->required(),
                TextInput::make('instagram'),
                TextInput::make('favorite_music_primary'),
                TextInput::make('favorite_music_secondary'),
                DatePicker::make('contract_date')
                    ->required(),
                TextInput::make('school_year')
                    ->required(),
            ]);
    }
}
