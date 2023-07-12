<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;

use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)->schema([
                Forms\Components\TextInput::make('l_name')
                    ->label('Фамилия')
                    ->maxLength(191)
                    ->required(),
                Forms\Components\TextInput::make('f_name')
                    ->label('Имя')
                    ->maxLength(191)
                    ->required(),
                Forms\Components\TextInput::make('m_name')
                    ->label('Отчество')
                    ->maxLength(191),
            ]),
            Grid::make(2)->schema([
                Forms\Components\TextInput::make('email')
                    ->label('Электронная почта')
                    ->maxLength(191)
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->numeric()
                    ->mask(fn (Forms\Components\TextInput\Mask $mask) => $mask->pattern('+{7} (000) 000-00-00'))
                    ->label('Номер телефона'),
            ]),
            Grid::make(2)->schema([
                Select::make('gender')
                    ->options([
                        'м' => 'Мужской',
                        'ж' => 'Женский',
                    ]),
                DatePicker::make('birth'),
            ]),
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
