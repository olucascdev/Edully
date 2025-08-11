<?php

namespace App\Filament\Resources\Permissions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PermissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->placeholder('Digite o nome da permissão')
                    ->columnSpanFull(),
                Select::make('roles')
                    ->label('Funções')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload()
                    ->columnSpanFull(),
            ]);
    }
}
