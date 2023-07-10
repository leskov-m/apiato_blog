<?php

namespace App\Containers\BlogSection\Category\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\DeleteCategoryAction;
use App\Containers\BlogSection\Category\UI\WEB\Requests\DeleteCategoryRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteCategoryController extends WebController
{
    public function destroy(DeleteCategoryRequest $request)
    {
         $result = app(DeleteCategoryAction::class)->run($request);
         // ..
    }
}
