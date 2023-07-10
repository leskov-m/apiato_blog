<?php

namespace App\Containers\BlogSection\Tag\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\BlogSection\Tag\Models\Tag;
use App\Containers\BlogSection\Tag\Tasks\CreateTagTask;
use App\Containers\BlogSection\Tag\UI\API\Requests\CreateTagRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateTagAction extends ParentAction
{
    /**
     * @param CreateTagRequest $request
     * @return Tag
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateTagRequest $request): Tag
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateTagTask::class)->run($data);
    }
}
