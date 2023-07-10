<?php

namespace App\Containers\BlogSection\Category\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Category\Tasks\CreateCategoryTask;
use App\Containers\BlogSection\Category\UI\API\Requests\CreateCategoryRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateCategoryAction extends ParentAction
{
    /**
     * @param CreateCategoryRequest $request
     * @return Category
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateCategoryRequest $request): Category
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateCategoryTask::class)->run($data);
    }
}
