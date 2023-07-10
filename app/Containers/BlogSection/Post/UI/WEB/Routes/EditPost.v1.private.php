<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\UpdatePostController;
use Illuminate\Support\Facades\Route;

Route::get('php artisan apiato:generate:web/{id}/edit', [UpdatePostController::class, 'edit'])
    ->middleware(['auth:web']);

