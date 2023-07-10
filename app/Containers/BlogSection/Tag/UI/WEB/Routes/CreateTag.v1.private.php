<?php

use App\Containers\BlogSection\Tag\UI\WEB\Controllers\CreateTagController;
use Illuminate\Support\Facades\Route;

Route::get('tags/create', [CreateTagController::class, 'create'])
    ->middleware(['auth:web']);

