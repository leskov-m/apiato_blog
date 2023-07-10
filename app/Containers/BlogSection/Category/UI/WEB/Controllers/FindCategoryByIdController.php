<?php

namespace App\Containers\BlogSection\Category\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\FindCategoryByIdAction;
use App\Containers\BlogSection\Category\UI\WEB\Requests\FindCategoryByIdRequest;
use App\Ship\Parents\Controllers\WebController;

class FindCategoryByIdController extends WebController
{
    public function show(FindCategoryByIdRequest $request)
    {
        $category = app(FindCategoryByIdAction::class)->run($request);
        // ..
    }
}
