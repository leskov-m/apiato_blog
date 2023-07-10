<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\CreateUserController;
use Illuminate\Support\Facades\Route;

Route::post('users/store', [CreateUserController::class, 'store'])
    ->middleware(['auth:web']);

