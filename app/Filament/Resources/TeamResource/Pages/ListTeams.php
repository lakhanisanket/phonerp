<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ListTeams extends ListRecords
{
    protected static string $resource = TeamResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),
                TextColumn::make('name')
                    ->placeholder('N/A')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->placeholder('N/A')
                    ->dateTime('M j, Y')
                    ->sortable(),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([])
            ->defaultSort('created_at', 'desc');
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
