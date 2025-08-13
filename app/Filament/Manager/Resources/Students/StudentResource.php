<?php

namespace App\Filament\Manager\Resources\Students;

use App\Filament\Manager\Resources\Students\Pages\CreateStudent;
use App\Filament\Manager\Resources\Students\Pages\EditStudent;
use App\Filament\Manager\Resources\Students\Pages\ListStudents;
use App\Filament\Manager\Resources\Students\Schemas\StudentForm;
use App\Filament\Manager\Resources\Students\Tables\StudentsTable;
use App\Models\Student;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StudentResource extends Resource
{

    public static function form(Schema $schema): Schema
    {
        return StudentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentsTable::configure($table);
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
            'index' => ListStudents::route('/'),
            'create' => CreateStudent::route('/criar'),
            'edit' => EditStudent::route('/{record}/editar'),
        ];
    }

    protected static ?string $model = Student::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    protected static ?string $navigationLabel = 'Estudantes';

    protected static ?string $pluralLabel = 'Estudantes';

    protected static ?string $label = 'Estudantes';

    protected static ?string $slug = 'estudantes';

    protected static ?string $recordTitleAttribute = 'name';
}
