<?php

namespace App\Containers\BlogSection\Category\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\BlogSection\Category\Tasks\GetAllCategoriesTask;
use App\Containers\BlogSection\Category\UI\API\Requests\GetAllCategoriesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCategoriesAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllCategoriesRequest $request): mixed
    {
        return app(GetAllCategoriesTask::class)->run();
    }
}
