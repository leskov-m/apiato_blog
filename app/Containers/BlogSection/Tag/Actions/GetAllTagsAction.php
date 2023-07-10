<?php

namespace App\Containers\BlogSection\Tag\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\BlogSection\Tag\Tasks\GetAllTagsTask;
use App\Containers\BlogSection\Tag\UI\API\Requests\GetAllTagsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTagsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllTagsRequest $request): mixed
    {
        return app(GetAllTagsTask::class)->run();
    }
}
