<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\User\Actions\DeleteUserAction;
use App\Containers\AppSection\User\UI\WEB\Requests\DeleteUserRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteUserController extends WebController
{
    public function destroy(DeleteUserRequest $request)
    {
         $result = app(DeleteUserAction::class)->run($request);
         // ..
    }
}
