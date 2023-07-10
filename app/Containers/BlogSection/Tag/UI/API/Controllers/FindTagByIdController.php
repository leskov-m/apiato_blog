<?php

namespace App\Containers\BlogSection\Tag\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Tag\Actions\FindTagByIdAction;
use App\Containers\BlogSection\Tag\UI\API\Requests\FindTagByIdRequest;
use App\Containers\BlogSection\Tag\UI\API\Transformers\TagTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindTagByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findTagById(FindTagByIdRequest $request): array
    {
        $tag = app(FindTagByIdAction::class)->run($request);

        return $this->transform($tag, TagTransformer::class);
    }
}
