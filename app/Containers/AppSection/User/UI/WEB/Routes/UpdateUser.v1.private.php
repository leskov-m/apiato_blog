<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\UpdateUserController;
use Illuminate\Support\Facades\Route;

Route::patch('users/{id}', [UpdateUserController::class, 'update'])
    ->middleware(['auth:web']);

