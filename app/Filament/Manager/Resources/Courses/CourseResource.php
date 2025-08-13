<?php

namespace App\Filament\Manager\Resources\Courses;

use App\Filament\Manager\Resources\Courses\Pages\CreateCourse;
use App\Filament\Manager\Resources\Courses\Pages\EditCourse;
use App\Filament\Manager\Resources\Courses\Pages\ListCourses;
use App\Filament\Manager\Resources\Courses\Schemas\CourseForm;
use App\Filament\Manager\Resources\Courses\Tables\CoursesTable;
use App\Models\Course;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CourseResource extends Resource
{

    public static function form(Schema $schema): Schema
    {
        return CourseForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CoursesTable::configure($table);
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
            'index' => ListCourses::route('/'),
//            'create' => CreateCourse::route('/criar'),
//            'edit' => EditCourse::route('/{record}/editar'),
        ];
    }

    protected static ?string $model = Course::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;
    protected static ?string $navigationLabel = 'Cursos';

    protected static ?string $pluralLabel = 'Cursos';

    protected static ?string $label = 'Cursos';

    protected static ?string $slug = 'cursos';

    protected static ?string $recordTitleAttribute = 'name';
}
