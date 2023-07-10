<?php

namespace App\Containers\BlogSection\Category\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Category\Actions\CreateCategoryAction;
use App\Containers\BlogSection\Category\UI\API\Requests\CreateCategoryRequest;
use App\Containers\BlogSection\Category\UI\API\Transformers\CategoryTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateCategoryController extends ApiController
{
    /**
     * @param CreateCategoryRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createCategory(CreateCategoryRequest $request): JsonResponse
    {
        $category = app(CreateCategoryAction::class)->run($request);

        return $this->created($this->transform($category, CategoryTransformer::class));
    }
}
