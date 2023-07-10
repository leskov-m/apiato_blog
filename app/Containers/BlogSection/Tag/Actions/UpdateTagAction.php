<?php

namespace App\Containers\BlogSection\Tag\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\BlogSection\Tag\Models\Tag;
use App\Containers\BlogSection\Tag\Tasks\UpdateTagTask;
use App\Containers\BlogSection\Tag\UI\API\Requests\UpdateTagRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateTagAction extends ParentAction
{
    /**
     * @param UpdateTagRequest $request
     * @return Tag
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateTagRequest $request): Tag
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateTagTask::class)->run($data, $request->id);
    }
}
