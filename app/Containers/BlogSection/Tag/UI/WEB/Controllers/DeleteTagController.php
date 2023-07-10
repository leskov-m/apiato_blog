<?php

namespace App\Containers\BlogSection\Tag\UI\WEB\Controllers;

use App\Containers\BlogSection\Tag\Actions\DeleteTagAction;
use App\Containers\BlogSection\Tag\UI\WEB\Requests\DeleteTagRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteTagController extends WebController
{
    public function destroy(DeleteTagRequest $request)
    {
         $result = app(DeleteTagAction::class)->run($request);
         // ..
    }
}
