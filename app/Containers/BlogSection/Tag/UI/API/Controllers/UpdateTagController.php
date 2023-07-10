<?php

namespace App\Containers\BlogSection\Tag\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Tag\Actions\UpdateTagAction;
use App\Containers\BlogSection\Tag\UI\API\Requests\UpdateTagRequest;
use App\Containers\BlogSection\Tag\UI\API\Transformers\TagTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateTagController extends ApiController
{
    /**
     * @param UpdateTagRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateTag(UpdateTagRequest $request): array
    {
        $tag = app(UpdateTagAction::class)->run($request);

        return $this->transform($tag, TagTransformer::class);
    }
}
