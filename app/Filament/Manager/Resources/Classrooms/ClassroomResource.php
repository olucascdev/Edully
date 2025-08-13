<?php

namespace App\Filament\Manager\Resources\Classrooms;

use App\Filament\Manager\Resources\Classrooms\Pages\CreateClassroom;
use App\Filament\Manager\Resources\Classrooms\Pages\EditClassroom;
use App\Filament\Manager\Resources\Classrooms\Pages\ListClassrooms;
use App\Filament\Manager\Resources\Classrooms\Schemas\ClassroomForm;
use App\Filament\Manager\Resources\Classrooms\Tables\ClassroomsTable;
use App\Models\Classroom;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClassroomResource extends Resource
{

    public static function form(Schema $schema): Schema
    {
        return ClassroomForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassroomsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClassrooms::route('/'),
//            'create' => CreateClassroom::route('/create'),
//            'edit' => EditClassroom::route('/{record}/edit'),
        ];
    }

    protected static ?string $model = Classroom::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArrowRightEndOnRectangle;
    protected static ?string $navigationLabel = 'Salas';
    protected static ?string $pluralLabel = 'Salas';

    protected static ?string $label = 'Salas';

    protected static ?string $slug = 'salas';
    protected static ?string $recordTitleAttribute = 'name';
}
