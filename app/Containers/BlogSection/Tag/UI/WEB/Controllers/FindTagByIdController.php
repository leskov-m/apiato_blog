<?php

namespace App\Containers\BlogSection\Tag\UI\WEB\Controllers;

use App\Containers\BlogSection\Tag\Actions\FindTagByIdAction;
use App\Containers\BlogSection\Tag\UI\WEB\Requests\FindTagByIdRequest;
use App\Ship\Parents\Controllers\WebController;

class FindTagByIdController extends WebController
{
    public function show(FindTagByIdRequest $request)
    {
        $tag = app(FindTagByIdAction::class)->run($request);
        // ..
    }
}
