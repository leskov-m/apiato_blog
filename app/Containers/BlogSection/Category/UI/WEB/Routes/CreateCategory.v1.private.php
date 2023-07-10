<?php

use App\Containers\BlogSection\Category\UI\WEB\Controllers\CreateCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('categories/create', [CreateCategoryController::class, 'create'])
    ->middleware(['auth:web']);

