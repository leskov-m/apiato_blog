<?php

use App\Containers\BlogSection\Tag\UI\WEB\Controllers\UpdateTagController;
use Illuminate\Support\Facades\Route;

Route::get('tags/{id}/edit', [UpdateTagController::class, 'edit'])
    ->middleware(['auth:web']);

