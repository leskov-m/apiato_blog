<?php

namespace App\Containers\BlogSection\Tag\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Tag\Actions\CreateTagAction;
use App\Containers\BlogSection\Tag\UI\API\Requests\CreateTagRequest;
use App\Containers\BlogSection\Tag\UI\API\Transformers\TagTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateTagController extends ApiController
{
    /**
     * @param CreateTagRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createTag(CreateTagRequest $request): JsonResponse
    {
        $tag = app(CreateTagAction::class)->run($request);

        return $this->created($this->transform($tag, TagTransformer::class));
    }
}
