<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Judul')
                ->searchable()
                ->sortable(),

                TextColumn::make('client_name')
                ->label('Nama Klien')
                ->searchable()
                ->sortable(),

                TextColumn::make('category.name_category')
                ->label('Kategori Project')
                ->searchable()
                ->sortable(),

                TextColumn::make('project_code')
                ->label('Kode Project')
                ->searchable()
                ->sortable(),

                TextColumn::make('created_at')
                ->label('Dibuat Pada')
                ->date()
                ->sortable(),

                ImageColumn::make('main_image')
                ->disk('public')
                ->imageSize(40)
                ->label('gambar Project'),
                
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
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
