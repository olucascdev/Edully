<?php

namespace App\Filament\Manager\Resources\Subjects;

use App\Filament\Manager\Resources\Subjects\Pages\CreateSubject;
use App\Filament\Manager\Resources\Subjects\Pages\EditSubject;
use App\Filament\Manager\Resources\Subjects\Pages\ListSubjects;
use App\Filament\Manager\Resources\Subjects\Schemas\SubjectForm;
use App\Filament\Manager\Resources\Subjects\Tables\SubjectsTable;
use App\Models\Subject;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SubjectResource extends Resource
{


    public static function form(Schema $schema): Schema
    {
        return SubjectForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubjectsTable::configure($table);
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
            'index' => ListSubjects::route('/'),
//            'create' => CreateSubject::route('/criar'),
//            'edit' => EditSubject::route('/{record}/editar'),
        ];
    }

    protected static ?string $model = Subject::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;
    protected static ?string $navigationLabel = 'Matérias';

    protected static ?string $pluralLabel = 'Matérias';

    protected static ?string $label = 'Matérias';

    protected static ?string $slug = 'materias';

    protected static ?string $recordTitleAttribute = 'name';
}
