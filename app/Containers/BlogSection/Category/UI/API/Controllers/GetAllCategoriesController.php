<?php

namespace App\Containers\BlogSection\Category\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Category\Actions\GetAllCategoriesAction;
use App\Containers\BlogSection\Category\UI\API\Requests\GetAllCategoriesRequest;
use App\Containers\BlogSection\Category\UI\API\Transformers\CategoryTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCategoriesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllCategories(GetAllCategoriesRequest $request): array
    {
        $categories = app(GetAllCategoriesAction::class)->run($request);

        return $this->transform($categories, CategoryTransformer::class);
    }
}
