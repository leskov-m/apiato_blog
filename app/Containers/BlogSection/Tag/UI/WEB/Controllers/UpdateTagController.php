<?php

namespace App\Containers\BlogSection\Tag\UI\WEB\Controllers;

use App\Containers\BlogSection\Tag\Actions\FindTagByIdAction;
use App\Containers\BlogSection\Tag\Actions\UpdateTagAction;
use App\Containers\BlogSection\Tag\UI\WEB\Requests\EditTagRequest;
use App\Containers\BlogSection\Tag\UI\WEB\Requests\UpdateTagRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdateTagController extends WebController
{
    public function edit(EditTagRequest $request)
    {
        $tag = app(FindTagByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateTagRequest $request)
    {
        $tag = app(UpdateTagAction::class)->run($request);
        // ..
    }
}
