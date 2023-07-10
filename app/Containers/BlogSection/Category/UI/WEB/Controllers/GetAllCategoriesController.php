<?php

namespace App\Containers\BlogSection\Category\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\GetAllCategoriesAction;
use App\Containers\BlogSection\Category\UI\WEB\Requests\GetAllCategoriesRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllCategoriesController extends WebController
{
    public function index(GetAllCategoriesRequest $request)
    {
        $categories = app(GetAllCategoriesAction::class)->run($request);
        // ..
    }
}
