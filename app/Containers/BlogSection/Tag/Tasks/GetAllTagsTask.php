<?php

namespace App\Containers\BlogSection\Tag\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\BlogSection\Tag\Data\Repositories\TagRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTagsTask extends ParentTask
{
    public function __construct(
        protected TagRepository $repository
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
