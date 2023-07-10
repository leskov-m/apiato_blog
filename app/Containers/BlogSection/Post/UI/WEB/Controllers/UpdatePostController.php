<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Controllers;

use App\Containers\BlogSection\Post\Actions\FindPostByIdAction;
use App\Containers\BlogSection\Post\Actions\UpdatePostAction;
use App\Containers\BlogSection\Post\UI\WEB\Requests\EditPostRequest;
use App\Containers\BlogSection\Post\UI\WEB\Requests\UpdatePostRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdatePostController extends WebController
{
    public function edit(EditPostRequest $request)
    {
        $post = app(FindPostByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdatePostRequest $request)
    {
        $post = app(UpdatePostAction::class)->run($request);
        // ..
    }
}
