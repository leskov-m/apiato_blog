<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\UpdatePostController;
use Illuminate\Support\Facades\Route;

Route::patch('php artisan apiato:generate:web/{id}', [UpdatePostController::class, 'update'])
    ->middleware(['auth:web']);

