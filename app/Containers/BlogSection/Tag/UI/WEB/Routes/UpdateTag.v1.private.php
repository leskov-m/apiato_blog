<?php

use App\Containers\BlogSection\Tag\UI\WEB\Controllers\UpdateTagController;
use Illuminate\Support\Facades\Route;

Route::patch('tags/{id}', [UpdateTagController::class, 'update'])
    ->middleware(['auth:web']);

