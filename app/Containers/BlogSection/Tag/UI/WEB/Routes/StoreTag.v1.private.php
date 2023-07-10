<?php

use App\Containers\BlogSection\Tag\UI\WEB\Controllers\CreateTagController;
use Illuminate\Support\Facades\Route;

Route::post('tags/store', [CreateTagController::class, 'store'])
    ->middleware(['auth:web']);

