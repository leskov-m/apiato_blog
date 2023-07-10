<?php

namespace App\Containers\BlogSection\Post\Actions;

use App\Containers\BlogSection\Post\Tasks\DeletePostTask;
use App\Containers\BlogSection\Post\UI\API\Requests\DeletePostRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeletePostAction extends ParentAction
{
    /**
     * @param DeletePostRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeletePostRequest $request): int
    {
        return app(DeletePostTask::class)->run($request->id);
    }
}
