<?php

namespace App\Containers\BlogSection\Tag\UI\API\Controllers;

use App\Containers\BlogSection\Tag\Actions\DeleteTagAction;
use App\Containers\BlogSection\Tag\UI\API\Requests\DeleteTagRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteTagController extends ApiController
{
    /**
     * @param DeleteTagRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteTag(DeleteTagRequest $request): JsonResponse
    {
        app(DeleteTagAction::class)->run($request);

        return $this->noContent();
    }
}
