<?php

namespace App\Containers\BlogSection\Post\Actions;

use App\Containers\BlogSection\Post\Models\Post;
use App\Containers\BlogSection\Post\Tasks\FindPostByIdTask;
use App\Containers\BlogSection\Post\UI\API\Requests\FindPostByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindPostByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindPostByIdRequest $request): Post
    {
        return app(FindPostByIdTask::class)->run($request->id);
    }
}
