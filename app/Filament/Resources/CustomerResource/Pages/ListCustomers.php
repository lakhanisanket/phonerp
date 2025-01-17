<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

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
                TextColumn::make('phone')
                    ->label('Phone')
                    ->placeholder('N/A'),
                TextColumn::make('email')
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
