<?php

use App\Containers\BlogSection\Tag\UI\WEB\Controllers\GetAllTagsController;
use Illuminate\Support\Facades\Route;

Route::get('tags', [GetAllTagsController::class, 'index'])
    ->middleware(['auth:web']);

