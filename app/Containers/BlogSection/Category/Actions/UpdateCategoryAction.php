<?php

namespace App\Containers\BlogSection\Category\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Category\Tasks\UpdateCategoryTask;
use App\Containers\BlogSection\Category\UI\API\Requests\UpdateCategoryRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateCategoryAction extends ParentAction
{
    /**
     * @param UpdateCategoryRequest $request
     * @return Category
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateCategoryRequest $request): Category
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateCategoryTask::class)->run($data, $request->id);
    }
}
