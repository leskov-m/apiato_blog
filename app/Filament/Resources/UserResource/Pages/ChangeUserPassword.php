<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Pages\EditRecord;

class ChangeUserPassword extends EditRecord
{
    protected static string $resource = UserResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(2)->schema([
                TextInput::make('password')
                    ->minLength(8)
                    ->maxLength(191)
                    ->required()
                    ->password()
                    ->label('Введите новый пароль')
                    ->confirmed(),
                TextInput::make('password_confirmation')
                    ->minLength(8)
                    ->maxLength(191)
                    ->required()
                    ->password()
                    ->label('Подтвердите пароль'),
            ]),
        ]);
    }
}
