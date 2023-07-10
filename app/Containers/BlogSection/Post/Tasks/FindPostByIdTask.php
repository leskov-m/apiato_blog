<?php

namespace App\Containers\BlogSection\Post\Tasks;

use App\Containers\BlogSection\Post\Data\Repositories\PostRepository;
use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindPostByIdTask extends ParentTask
{
    public function __construct(
        protected PostRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Post
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
