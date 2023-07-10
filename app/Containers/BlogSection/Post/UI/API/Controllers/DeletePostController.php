<?php

namespace App\Containers\BlogSection\Post\UI\API\Controllers;

use App\Containers\BlogSection\Post\Actions\DeletePostAction;
use App\Containers\BlogSection\Post\UI\API\Requests\DeletePostRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeletePostController extends ApiController
{
    /**
     * @param DeletePostRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deletePost(DeletePostRequest $request): JsonResponse
    {
        app(DeletePostAction::class)->run($request);

        return $this->noContent();
    }
}
