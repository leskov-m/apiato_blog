<?php

namespace App\Containers\BlogSection\Tag\UI\WEB\Controllers;

use App\Containers\BlogSection\Tag\Actions\CreateTagAction;
use App\Containers\BlogSection\Tag\UI\WEB\Requests\CreateTagRequest;
use App\Containers\BlogSection\Tag\UI\WEB\Requests\StoreTagRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateTagController extends WebController
{
    public function create(CreateTagRequest $request)
    {
        // ..
    }

    public function store(StoreTagRequest $request)
    {
        $tag = app(CreateTagAction::class)->run($request);
        // ..
    }
}
