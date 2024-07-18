<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\Business;
use App\Models\Platform;
use Filament\Actions;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone'),
                TextInput::make('email')
                    ->email()
                    ->required(),
                Select::make('business_id')
                    ->label('Business')
                    ->options(Business::pluck('name', 'id')->toArray()),
                Textarea::make('data')
                    ->columnSpanFull(),
                Toggle::make('status')
            ]);
    }
}
