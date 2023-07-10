<?php

namespace App\Containers\BlogSection\Post\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Post\Actions\CreatePostAction;
use App\Containers\BlogSection\Post\UI\API\Requests\CreatePostRequest;
use App\Containers\BlogSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreatePostController extends ApiController
{
    /**
     * @param CreatePostRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createPost(CreatePostRequest $request): JsonResponse
    {
        $post = app(CreatePostAction::class)->run($request);

        return $this->created($this->transform($post, PostTransformer::class));
    }
}
