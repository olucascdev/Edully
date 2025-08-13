<?php

namespace App\Filament\Admin\Resources\Permissions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PermissionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('name')
                ->label('Nome')
                ->searchable(),
            TextColumn::make('roles.name')
                ->label('Função')
                ->badge()
                ->formatStateUsing(fn ($state) => $state ?: 'Nenhuma função atribuída')
                ->sortable()
                ->searchable(),
        ])
        ->filters([
            //
        ])
        ->recordActions([
            EditAction::make(),
            DeleteAction::make(),
        ])
        ->toolbarActions([
            BulkActionGroup::make([
                DeleteBulkAction::make(),
            ]),
        ]);
    }
}
