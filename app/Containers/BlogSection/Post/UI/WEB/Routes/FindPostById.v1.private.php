<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\FindPostByIdController;
use Illuminate\Support\Facades\Route;

Route::get('php artisan apiato:generate:web/{id}', [FindPostByIdController::class, 'show'])
    ->middleware(['auth:web']);

