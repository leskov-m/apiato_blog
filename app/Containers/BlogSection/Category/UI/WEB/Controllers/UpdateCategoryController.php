<?php

namespace App\Containers\BlogSection\Category\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\FindCategoryByIdAction;
use App\Containers\BlogSection\Category\Actions\UpdateCategoryAction;
use App\Containers\BlogSection\Category\UI\WEB\Requests\EditCategoryRequest;
use App\Containers\BlogSection\Category\UI\WEB\Requests\UpdateCategoryRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdateCategoryController extends WebController
{
    public function edit(EditCategoryRequest $request)
    {
        $category = app(FindCategoryByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateCategoryRequest $request)
    {
        $category = app(UpdateCategoryAction::class)->run($request);
        // ..
    }
}
