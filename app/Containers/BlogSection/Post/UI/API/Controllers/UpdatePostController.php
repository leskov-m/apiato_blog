<?php

namespace App\Containers\BlogSection\Post\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Post\Actions\UpdatePostAction;
use App\Containers\BlogSection\Post\UI\API\Requests\UpdatePostRequest;
use App\Containers\BlogSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdatePostController extends ApiController
{
    /**
     * @param UpdatePostRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updatePost(UpdatePostRequest $request): array
    {
        $post = app(UpdatePostAction::class)->run($request);

        return $this->transform($post, PostTransformer::class);
    }
}
