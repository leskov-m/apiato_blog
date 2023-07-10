<?php

namespace App\Filament\Resources;

use App\Containers\AppSection\User\Models\User;
use App\Filament\Resources\UserResource\Pages;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;

use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('l_name')->required(),
                Forms\Components\TextInput::make('f_name')->required(),
                Forms\Components\TextInput::make('m_name')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('l_name')
                    ->label('Фамилия')
                    ->searchable(),
                Tables\Columns\TextColumn::make('f_name')
                    ->label('Имя')
                    ->searchable(),
                Tables\Columns\TextColumn::make('m_name')
                    ->label('Отчество')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Телефон')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Почта')
                    ->searchable(),
            ])
            ->filters(
                [
                    Tables\Filters\TrashedFilter::make(),
                    Tables\Filters\Filter::make('verified')
                        ->query(fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
                    Tables\Filters\Filter::make('has phone number')
                        ->query(fn (Builder $query): Builder => $query->whereNotNull('phone')),
                    Tables\Filters\Filter::make('Has gender')
                        ->query(fn (Builder $query): Builder => $query->whereNotNull('gender')),
                    Tables\Filters\Filter::make('Has birth date')
                        ->query(fn (Builder $query): Builder => $query->whereNotNull('birth')),
                    Tables\Filters\Filter::make('Has middle name')
                        ->query(fn (Builder $query): Builder => $query->whereNotNull('m_name')),
                ]
            )
            ->actions([
                Tables\Actions\EditAction::make()
                    ->color('warning')
                    ->disabled(function () {
                        /**
                         * @var $user User
                         */
                        $user = auth()->user();

                        return !$user->hasAdminRole();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->color('danger'),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make()
                    ->color('success'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
