<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Controllers;

use App\Containers\BlogSection\Post\Actions\GetAllPostsAction;
use App\Containers\BlogSection\Post\UI\WEB\Requests\GetAllPostsRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllPostsController extends WebController
{
    public function index(GetAllPostsRequest $request)
    {
        $posts = app(GetAllPostsAction::class)->run($request);
        // ..
    }
}
