<?php

namespace App\Containers\BlogSection\Post\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Post\Actions\FindPostByIdAction;
use App\Containers\BlogSection\Post\UI\API\Requests\FindPostByIdRequest;
use App\Containers\BlogSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindPostByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findPostById(FindPostByIdRequest $request): array
    {
        $post = app(FindPostByIdAction::class)->run($request);

        return $this->transform($post, PostTransformer::class);
    }
}
