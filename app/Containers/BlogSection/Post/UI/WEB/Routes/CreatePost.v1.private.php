<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\CreatePostController;
use Illuminate\Support\Facades\Route;

Route::get('php artisan apiato:generate:web/create', [CreatePostController::class, 'create'])
    ->middleware(['auth:web']);

