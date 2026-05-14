<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                ->label('judul')
                ->placeholder('Tulis Judul')
                ->required(),
                TextInput::make('client_name')
                ->label('Nama Klien')
                ->placeholder('Tulis Nama Klien')
                ->required(),
                Select::make('categories_id')
                ->label('Kategori')
                ->relationship('category', 'name_category')
                ->placeholder('Pilih Kategori')
                ->searchable()
                ->preload()
                ->createOptionForm([
                    TextInput::make('name_category')
                    ->label('Nama Kategori')
                    ->placeholder('Tulis Nama Kategori')
                    ->required(),
                ]),
            ]);
    }
}
