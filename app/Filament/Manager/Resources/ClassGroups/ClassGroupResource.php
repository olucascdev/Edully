<?php

namespace App\Filament\Manager\Resources\ClassGroups;

use App\Filament\Manager\Resources\ClassGroups\Pages\CreateClassGroup;
use App\Filament\Manager\Resources\ClassGroups\Pages\EditClassGroup;
use App\Filament\Manager\Resources\ClassGroups\Pages\ListClassGroups;
use App\Filament\Manager\Resources\ClassGroups\Schemas\ClassGroupForm;
use App\Filament\Manager\Resources\ClassGroups\Tables\ClassGroupsTable;
use App\Models\ClassGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClassGroupResource extends Resource
{
    public static function form(Schema $schema): Schema
    {
        return ClassGroupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassGroupsTable::configure($table);
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
            'index' => ListClassGroups::route('/'),
            'create' => CreateClassGroup::route('/criar'),
            'edit' => EditClassGroup::route('/{record}/editar'),
        ];
    }

    protected static ?string $model = ClassGroup::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleGroup;
    protected static ?string $navigationLabel = 'Turmas';
    protected static ?string $pluralLabel = 'Turmas';

    protected static ?string $label = 'Turmas';

    protected static ?string $slug = 'turmas';
    protected static ?string $recordTitleAttribute = 'name';

}
