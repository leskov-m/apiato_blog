<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\UserResource;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;

use Filament\Resources\Form;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    public function form(Form $form): Form
    {
        //        $roles = app(RoleRepository::class)->pluck('name','id');
        //        dd($roles);

        return $form->schema([
//            Grid::make(3)->schema([
//                Select::make('Роль')
//                    ->options(function ()
//                    {
//                    }),
//            ]),
            Grid::make(3)->schema([
                Forms\Components\TextInput::make('l_name')
                    ->label('Фамилия')
                    ->required(),
                Forms\Components\TextInput::make('f_name')
                    ->label('Имя')
                    ->required(),
                Forms\Components\TextInput::make('m_name')
                    ->label('Отчество'),
            ]),
            Grid::make(2)->schema([
                Forms\Components\TextInput::make('email')
                    ->label('Электронная почта')
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
        ]);
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
