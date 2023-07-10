<?php

namespace App\Containers\BlogSection\Tag\Actions;

use App\Containers\BlogSection\Tag\Models\Tag;
use App\Containers\BlogSection\Tag\Tasks\FindTagByIdTask;
use App\Containers\BlogSection\Tag\UI\API\Requests\FindTagByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindTagByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindTagByIdRequest $request): Tag
    {
        return app(FindTagByIdTask::class)->run($request->id);
    }
}
