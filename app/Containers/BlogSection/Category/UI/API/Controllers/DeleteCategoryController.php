<?php

namespace App\Containers\BlogSection\Category\UI\API\Controllers;

use App\Containers\BlogSection\Category\Actions\DeleteCategoryAction;
use App\Containers\BlogSection\Category\UI\API\Requests\DeleteCategoryRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteCategoryController extends ApiController
{
    /**
     * @param DeleteCategoryRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteCategory(DeleteCategoryRequest $request): JsonResponse
    {
        app(DeleteCategoryAction::class)->run($request);

        return $this->noContent();
    }
}
