<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\FindUserByIdAction;
use App\Containers\AppSection\User\Actions\UpdateUserAction;
use App\Containers\AppSection\User\UI\WEB\Requests\EditUserRequest;
use App\Containers\AppSection\User\UI\WEB\Requests\UpdateUserRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdateUserController extends WebController
{
    public function edit(EditUserRequest $request)
    {
        $user = app(FindUserByIdAction::class)->run($request);
        return 1;
    }

    public function update(UpdateUserRequest $request)
    {
        $user = app(UpdateUserAction::class)->run($request);
        return 1;
    }
}
