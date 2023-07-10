<?php

namespace App\Containers\BlogSection\Post\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\BlogSection\Post\Data\Repositories\PostRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPostsTask extends ParentTask
{
    public function __construct(
        protected PostRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->addRequestCriteria()->repository->paginate();
    }
}
