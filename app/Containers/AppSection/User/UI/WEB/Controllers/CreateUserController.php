<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\CreateUserAction;
use App\Containers\AppSection\User\UI\WEB\Requests\CreateUserRequest;
use App\Containers\AppSection\User\UI\WEB\Requests\StoreUserRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateUserController extends WebController
{
    public function create(CreateUserRequest $request)
    {
        // ..
    }

    public function store(StoreUserRequest $request)
    {
        $user = app(CreateUserAction::class)->run($request);
        // ..
    }
}
