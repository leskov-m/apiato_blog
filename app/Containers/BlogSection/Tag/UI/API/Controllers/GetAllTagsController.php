<?php

namespace App\Containers\BlogSection\Tag\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\BlogSection\Tag\Actions\GetAllTagsAction;
use App\Containers\BlogSection\Tag\UI\API\Requests\GetAllTagsRequest;
use App\Containers\BlogSection\Tag\UI\API\Transformers\TagTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTagsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllTags(GetAllTagsRequest $request): array
    {
        $tags = app(GetAllTagsAction::class)->run($request);

        return $this->transform($tags, TagTransformer::class);
    }
}
