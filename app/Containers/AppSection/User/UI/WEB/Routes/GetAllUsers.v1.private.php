<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\GetAllUsersController;
use Illuminate\Support\Facades\Route;

Route::get('users', [GetAllUsersController::class, 'index'])
    ->middleware(['auth:web']);

