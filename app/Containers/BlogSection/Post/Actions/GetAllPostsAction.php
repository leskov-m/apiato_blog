<?php

namespace App\Containers\BlogSection\Post\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\BlogSection\Post\Tasks\GetAllPostsTask;
use App\Containers\BlogSection\Post\UI\API\Requests\GetAllPostsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPostsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllPostsRequest $request): mixed
    {
        return app(GetAllPostsTask::class)->run();
    }
}
