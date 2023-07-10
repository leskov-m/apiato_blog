<?php

use App\Containers\BlogSection\Tag\UI\WEB\Controllers\FindTagByIdController;
use Illuminate\Support\Facades\Route;

Route::get('tags/{id}', [FindTagByIdController::class, 'show'])
    ->middleware(['auth:web']);

