<?php

namespace App\Filament\Manager\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('address.id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('guardian')
                    ->searchable(),
                TextColumn::make('student_phone')
                    ->searchable(),
                TextColumn::make('guardian_phone')
                    ->searchable(),
                TextColumn::make('cpf')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('start_period')
                    ->date()
                    ->sortable(),
                TextColumn::make('end_period')
                    ->date()
                    ->sortable(),
                TextColumn::make('total_students')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tuition_value')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('installments_qty')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('due_day')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('uniform_size')
                    ->searchable(),
                TextColumn::make('instagram')
                    ->searchable(),
                TextColumn::make('favorite_music_primary')
                    ->searchable(),
                TextColumn::make('favorite_music_secondary')
                    ->searchable(),
                TextColumn::make('contract_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('school_year')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
