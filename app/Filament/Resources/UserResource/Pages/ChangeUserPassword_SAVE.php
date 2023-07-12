<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Containers\AppSection\User\Models\User;
#use Filament\Pages\Page;
use Filament\Resources\Pages\Page;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Table;
use Filament\Tables;

#use Filament\Resources\Pages\CreateRecord;

class ChangeUserPassword_SAVE extends Page
{
    protected static ?string $model = User::class;

    protected static string $resource = UserResource::class;

    protected static string $view = 'filament.resources.user-resource.pages.change-user-password';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('l_name'),
                Tables\Columns\TextColumn::make('f_name'),
                Tables\Columns\TextColumn::make('m_name'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

            ]);
    }
}
