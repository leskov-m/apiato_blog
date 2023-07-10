<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\CreatePostController;
use Illuminate\Support\Facades\Route;

Route::post('php artisan apiato:generate:web/store', [CreatePostController::class, 'store'])
    ->middleware(['auth:web']);

