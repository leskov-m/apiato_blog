<?php

use App\Containers\BlogSection\Category\UI\WEB\Controllers\GetAllCategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('categories', [GetAllCategoriesController::class, 'index'])
    ->middleware(['auth:web']);

