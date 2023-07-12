<?php

namespace App\Filament\Resources;

use App\Containers\AppSection\User\Models\User;
use App\Filament\Resources\UserResource\Pages;
use Filament\Forms;
use Filament\Resources\Form;

use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('l_name')
                    ->label('Фамилия')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('f_name')
                    ->label('Имя')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('m_name')
                    ->label('Отчество')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Телефон')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Почта')
                    ->limit(10)
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->label('Пол'),
                Tables\Columns\TextColumn::make('birth')
                    ->date('d.m.Y')
                    ->label('Дата рождения'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Дата рождения от'),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('Дата рождения до'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('birth', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('birth', '<=', $date),
                            );
                    }),
                Tables\Filters\Filter::make('verified')
                    ->label('Верифицированные пользователи')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
                Tables\Filters\Filter::make('has phone number')
                    ->label('Указан номер телефона')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('phone')),
                Tables\Filters\Filter::make('Has gender')
                    ->label('Указан пол')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('gender')),
                Tables\Filters\Filter::make('Has birth date')
                    ->label('Указана дата рождения')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('birth')),
                Tables\Filters\Filter::make('Has middle name')
                    ->label('Указано отчество')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('m_name')),
                ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->color('warning')
                    ->icon('heroicon-o-pencil')
                    ->label('Пользователь')
                    ->disabled(function () {
                        /**
                         * @var $user User
                         */
                        $user = auth()->user();

                        return !$user->hasAdminRole();
                    }),
                Tables\Actions\Action::make('password')
                    ->url(fn (User $record) => route('filament.resources.users.password-edit', $record))
                    ->color('danger')
                    ->icon('heroicon-o-pencil')
                    ->label('Пароль')
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
            //UserResource\RelationManagers\UsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
            'password-edit' => Pages\ChangeUserPassword::route('/{record}/password-edit'),
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
