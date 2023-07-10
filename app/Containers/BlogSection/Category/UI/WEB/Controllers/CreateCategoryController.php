<?php

namespace App\Containers\BlogSection\Category\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\CreateCategoryAction;
use App\Containers\BlogSection\Category\UI\WEB\Requests\CreateCategoryRequest;
use App\Containers\BlogSection\Category\UI\WEB\Requests\StoreCategoryRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateCategoryController extends WebController
{
    public function create(CreateCategoryRequest $request)
    {
        // ..
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = app(CreateCategoryAction::class)->run($request);
        // ..
    }
}
