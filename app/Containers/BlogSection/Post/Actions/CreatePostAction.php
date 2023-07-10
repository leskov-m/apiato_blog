<?php

namespace App\Containers\BlogSection\Post\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\BlogSection\Post\Models\Post;
use App\Containers\BlogSection\Post\Tasks\CreatePostTask;
use App\Containers\BlogSection\Post\UI\API\Requests\CreatePostRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePostAction extends ParentAction
{
    /**
     * @param CreatePostRequest $request
     * @return Post
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePostRequest $request): Post
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreatePostTask::class)->run($data);
    }
}
