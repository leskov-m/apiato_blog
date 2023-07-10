<?php

namespace App\Containers\BlogSection\Tag\Tasks;

use App\Containers\BlogSection\Tag\Data\Repositories\TagRepository;
use App\Containers\BlogSection\Tag\Models\Tag;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateTagTask extends ParentTask
{
    public function __construct(
        protected TagRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Tag
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
