<?php

namespace App\Containers\BlogSection\Post\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Post\Actions\GetAllPostsAction;
use App\Containers\BlogSection\Post\UI\API\Requests\GetAllPostsRequest;
use App\Containers\BlogSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPostsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllPosts(GetAllPostsRequest $request): array
    {
        $posts = app(GetAllPostsAction::class)->run($request);

        return $this->transform($posts, PostTransformer::class);
    }
}
