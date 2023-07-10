<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\CreateUserController;
use Illuminate\Support\Facades\Route;

Route::get('users/create', [CreateUserController::class, 'create'])
    ->middleware(['web:auth']);

