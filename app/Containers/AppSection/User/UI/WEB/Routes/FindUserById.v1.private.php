<?php

use App\Containers\AppSection\User\UI\WEB\Controllers\FindUserByIdController;
use Illuminate\Support\Facades\Route;

Route::get('users/{id}', [FindUserByIdController::class, 'show'])
    ->middleware(['auth:web']);

