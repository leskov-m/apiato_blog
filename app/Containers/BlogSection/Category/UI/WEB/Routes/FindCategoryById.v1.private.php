<?php

use App\Containers\BlogSection\Category\UI\WEB\Controllers\FindCategoryByIdController;
use Illuminate\Support\Facades\Route;

Route::get('categories/{id}', [FindCategoryByIdController::class, 'show'])
    ->middleware(['auth:web']);

