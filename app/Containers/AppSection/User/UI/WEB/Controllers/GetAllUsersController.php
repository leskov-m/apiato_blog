<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\GetAllUsersAction;
use App\Containers\AppSection\User\UI\WEB\Requests\GetAllUsersRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllUsersController extends WebController
{
    public function index(GetAllUsersRequest $request)
    {
        $users = app(GetAllUsersAction::class)->run($request);
        return view('appSection@user::test', compact('users'));
    }
}
