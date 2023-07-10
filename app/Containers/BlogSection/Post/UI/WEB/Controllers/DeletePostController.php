<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Controllers;

use App\Containers\BlogSection\Post\Actions\DeletePostAction;
use App\Containers\BlogSection\Post\UI\WEB\Requests\DeletePostRequest;
use App\Ship\Parents\Controllers\WebController;

class DeletePostController extends WebController
{
    public function destroy(DeletePostRequest $request)
    {
         $result = app(DeletePostAction::class)->run($request);
         // ..
    }
}
