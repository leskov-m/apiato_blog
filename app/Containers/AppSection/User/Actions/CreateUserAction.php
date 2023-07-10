<?php

namespace App\Containers\AppSection\User\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\CreateUserTask;
use App\Containers\AppSection\User\UI\WEB\Requests\CreateUserRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateUserAction extends ParentAction
{
    /**
     * @param CreateUserRequest $request
     * @return User
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateUserRequest $request): User
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateUserTask::class)->run($data);
    }
}
