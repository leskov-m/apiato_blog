<?php

use App\Containers\BlogSection\Category\UI\WEB\Controllers\UpdateCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('categories/{id}/edit', [UpdateCategoryController::class, 'edit'])
    ->middleware(['auth:web']);

