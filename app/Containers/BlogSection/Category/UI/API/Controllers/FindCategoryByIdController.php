<?php

namespace App\Containers\BlogSection\Category\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Category\Actions\FindCategoryByIdAction;
use App\Containers\BlogSection\Category\UI\API\Requests\FindCategoryByIdRequest;
use App\Containers\BlogSection\Category\UI\API\Transformers\CategoryTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindCategoryByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findCategoryById(FindCategoryByIdRequest $request): array
    {
        $category = app(FindCategoryByIdAction::class)->run($request);

        return $this->transform($category, CategoryTransformer::class);
    }
}
