<?php

namespace App\Containers\BlogSection\Tag\UI\WEB\Controllers;

use App\Containers\BlogSection\Tag\Actions\GetAllTagsAction;
use App\Containers\BlogSection\Tag\UI\WEB\Requests\GetAllTagsRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllTagsController extends WebController
{
    public function index(GetAllTagsRequest $request)
    {
        $tags = app(GetAllTagsAction::class)->run($request);
        // ..
    }
}
