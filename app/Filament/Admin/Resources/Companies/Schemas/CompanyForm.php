<?php

namespace App\Filament\Admin\Resources\Companies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\{Get, Set};
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Dados Gerais')
                            ->icon(Heroicon::BuildingOffice)
                            ->schema([
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('name')
                                        ->label('Nome')
                                        ->required()
                                        ->minLength(3)
                                        ->maxLength(255),
                                    TextInput::make('cnpj')
                                        ->label('CNPJ')
                                        ->required()
                                        ->mask('99.999.999/9999-99'),
                                ]),

                                FileUpload::make('logo_path')
                                    ->label('Logo')
                                    ->image()
                                    ->directory('logos')
                                    ->visibility('private')
                                    ->maxSize(3024)
                                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                                    ->nullable()
                                    ->columnSpanFull(),

                            ]),
                        Tab::make('Contato')
                            ->icon(Heroicon::Phone)
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('email')
                                            ->label('E-mail')
                                            ->email()
                                            ->maxLength(255)
                                            ->nullable(),
                                        TextInput::make('phone')
                                            ->label('Telefone')
                                            ->tel()
                                            ->maxLength(20)
                                            ->mask('(99) 9 9999-9999')
                                            ->nullable(),
                                        ])
                            ]),
                        Tab::make('Endereço')
                            ->icon(Heroicon::Map)
                            ->schema([
                                TextInput::make('zipcode')
                                    ->label('CEP')
                                    ->mask('99999-999')
                                    ->maxLength(9)
                                    ->nullable()
                                    ->ColumnSpanFull(),
                                Grid::make(2)
                                    ->schema([
                                        Select::make('state_id')
                                            ->label('Estado')
                                            ->required()
                                            ->preload()
                                            ->live()
                                            ->relationship('state', 'name')
                                            ->afterStateUpdated(fn (Set $set) => $set('city_id', null)),

                                        Select::make('city_id')
                                            ->label('Cidade')
                                            ->requiredWith('state_id')
                                            ->searchable()
                                            ->preload()
                                            ->relationship(
                                                'city',
                                                'name',
                                                modifyQueryUsing: fn (Builder $query, Get $get) => $query->where('state_id', $get('state_id'))
                                            )
                                            ->disabled(fn (Get $get) => !$get('state_id')),
                                        Grid::make(3)
                                            ->columnSpanFull()
                                            ->schema([
                                                TextInput::make('district')
                                                    ->label('Bairro')
                                                    ->maxLength(255)
                                                    ->nullable(),
                                                TextInput::make('street')
                                                    ->label('Rua')
                                                    ->maxLength(255)
                                                    ->nullable(),
                                                TextInput::make('number')
                                                    ->label('Número')
                                                    ->maxLength(10)
                                                    ->nullable(),
                                            ])

                                    ])
                            ]),
                        Tab::make('Configurações')
                            ->icon(Heroicon::Cog6Tooth)
                            ->schema([
                                Select::make('active_school_year')
                                    ->label('Ano letivo ativo')
                                    ->options(
                                        collect(range(date('Y'), date('Y') + 5))
                                            ->mapWithKeys(fn ($year) => [$year => $year])
                                    )
                                    ->default(date('Y'))
                                    ->required(),
                            ]),

                    ])
            ]);
    }
}
