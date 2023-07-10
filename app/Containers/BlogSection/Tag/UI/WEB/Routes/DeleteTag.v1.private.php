<?php

use App\Containers\BlogSection\Tag\UI\WEB\Controllers\DeleteTagController;
use Illuminate\Support\Facades\Route;

Route::delete('tags/{id}', [DeleteTagController::class, 'destroy'])
    ->middleware(['auth:web']);

