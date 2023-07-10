<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\FindUserByIdAction;
use App\Containers\AppSection\User\UI\WEB\Requests\FindUserByIdRequest;
use App\Ship\Parents\Controllers\WebController;

class FindUserByIdController extends WebController
{
    public function show(FindUserByIdRequest $request)
    {
        $user = app(FindUserByIdAction::class)->run($request);
        // ..
    }
}
