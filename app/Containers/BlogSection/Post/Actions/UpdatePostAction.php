<?php

namespace App\Containers\BlogSection\Post\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\BlogSection\Post\Models\Post;
use App\Containers\BlogSection\Post\Tasks\UpdatePostTask;
use App\Containers\BlogSection\Post\UI\API\Requests\UpdatePostRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdatePostAction extends ParentAction
{
    /**
     * @param UpdatePostRequest $request
     * @return Post
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdatePostRequest $request): Post
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdatePostTask::class)->run($data, $request->id);
    }
}
