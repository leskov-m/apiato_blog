<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\DeleteUserController;
use Illuminate\Support\Facades\Route;

Route::delete('users/{id}', [DeleteUserController::class, 'destroy'])
    ->middleware(['auth:web']);

