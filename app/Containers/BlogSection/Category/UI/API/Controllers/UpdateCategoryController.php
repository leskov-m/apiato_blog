<?php

namespace App\Containers\BlogSection\Category\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Category\Actions\UpdateCategoryAction;
use App\Containers\BlogSection\Category\UI\API\Requests\UpdateCategoryRequest;
use App\Containers\BlogSection\Category\UI\API\Transformers\CategoryTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateCategoryController extends ApiController
{
    /**
     * @param UpdateCategoryRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateCategory(UpdateCategoryRequest $request): array
    {
        $category = app(UpdateCategoryAction::class)->run($request);

        return $this->transform($category, CategoryTransformer::class);
    }
}
