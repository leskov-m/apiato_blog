<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Controllers;

use App\Containers\BlogSection\Post\Actions\CreatePostAction;
use App\Containers\BlogSection\Post\UI\WEB\Requests\CreatePostRequest;
use App\Containers\BlogSection\Post\UI\WEB\Requests\StorePostRequest;
use App\Ship\Parents\Controllers\WebController;

class CreatePostController extends WebController
{
    public function create(CreatePostRequest $request)
    {
        // ..
    }

    public function store(StorePostRequest $request)
    {
        $post = app(CreatePostAction::class)->run($request);
        // ..
    }
}
