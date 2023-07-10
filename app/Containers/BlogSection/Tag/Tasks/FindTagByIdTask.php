<?php

namespace App\Containers\BlogSection\Tag\Tasks;

use App\Containers\BlogSection\Tag\Data\Repositories\TagRepository;
use App\Containers\BlogSection\Tag\Models\Tag;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindTagByIdTask extends ParentTask
{
    public function __construct(
        protected TagRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Tag
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
