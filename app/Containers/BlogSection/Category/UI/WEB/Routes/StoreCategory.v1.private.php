<?php

use App\Containers\BlogSection\Category\UI\WEB\Controllers\CreateCategoryController;
use Illuminate\Support\Facades\Route;

Route::post('categories/store', [CreateCategoryController::class, 'store'])
    ->middleware(['auth:web']);

