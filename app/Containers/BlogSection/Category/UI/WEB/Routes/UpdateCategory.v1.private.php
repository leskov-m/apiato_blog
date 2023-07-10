<?php

use App\Containers\BlogSection\Category\UI\WEB\Controllers\UpdateCategoryController;
use Illuminate\Support\Facades\Route;

Route::patch('categories/{id}', [UpdateCategoryController::class, 'update'])
    ->middleware(['auth:web']);

