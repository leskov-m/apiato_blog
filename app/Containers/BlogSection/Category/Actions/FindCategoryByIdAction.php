<?php

namespace App\Containers\BlogSection\Category\Actions;

use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Category\Tasks\FindCategoryByIdTask;
use App\Containers\BlogSection\Category\UI\API\Requests\FindCategoryByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindCategoryByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindCategoryByIdRequest $request): Category
    {
        return app(FindCategoryByIdTask::class)->run($request->id);
    }
}
