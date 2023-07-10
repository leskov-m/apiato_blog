<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\GetAllPostsController;
use Illuminate\Support\Facades\Route;

Route::get('php artisan apiato:generate:web', [GetAllPostsController::class, 'index'])
    ->middleware(['auth:web']);

