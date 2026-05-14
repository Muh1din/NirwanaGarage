<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

use function Laravel\Prompts\grid;

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

                Select::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name_category')
                    ->placeholder('Pilih Kategori')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('name_category')
                    ->required(),
                ]),

                Repeater::make('projectSpecs')
                    ->label('Spesifikasi Proyek')
                    ->relationship('projectSpecs')
                    ->schema([
                        TextInput::make('spec_name')
                            ->label('Nama Spesifikasi')
                            ->placeholder('Tulis Nama Spesifikasi')
                            ->required(),

                        TextInput::make('spec_value')
                            ->label('Nilai Spesifikasi')
                            ->placeholder('Tulis Nilai Spesifikasi')
                            ->required(),
                    ]),

                Textarea::make('description_short')
                    ->label('Deskripsi Singkat')
                    ->placeholder('Tulis Deskripsi Singkat')
                    ->required(),

                FileUpload::make('main_image')
                    ->image()
                    ->label('Gambar Utama')
                    ->disk('public')
                    ->directory('projects/main_images') 
                    ->placeholder('Unggah Gambar Utama')
                    ->image()
                    ->required(),

                Repeater::make('projectImages')
                    ->label('Gambar Project')
                    ->relationship('projectImages')
                    ->schema([
                        FileUpload::make('sub_image')
                            ->image()
                            ->label('Gambar Sub')
                            ->disk('public')
                            ->directory('projects/sub_images') 
                            ->placeholder('Unggah Gambar Sub')
                            ->required(),
                    ])->grid(2)->maxItems(2),
                

                RichEditor::make('procces_text')
                    ->label('Proses Pengerjaan')
                    ->placeholder('Tulis Proses Pengerjaan')
                    ->required(),
            ]);
    }
}
