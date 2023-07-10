<?php

use App\Containers\BlogSection\Category\UI\WEB\Controllers\DeleteCategoryController;
use Illuminate\Support\Facades\Route;

Route::delete('categories/{id}', [DeleteCategoryController::class, 'destroy'])
    ->middleware(['auth:web']);

