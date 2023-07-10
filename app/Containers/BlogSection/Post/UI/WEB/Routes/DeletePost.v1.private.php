<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\DeletePostController;
use Illuminate\Support\Facades\Route;

Route::delete('php artisan apiato:generate:web/{id}', [DeletePostController::class, 'destroy'])
    ->middleware(['auth:web']);

