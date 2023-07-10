<?php

namespace App\Containers\AppSection\Authorization\Data\Seeders;

use App\Containers\AppSection\User\Actions\CreateAdminAction;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use Throwable;

class AuthorizationDefaultUsersSeeder_4 extends ParentSeeder
{
    public function __construct(
        private readonly CreateAdminAction $createAdminAction
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws Throwable
     */
    public function run(): void
    {
        // Default Users (with their roles) ---------------------------------------------
        $this->createSuperAdmin();
    }

    /**
     * @throws CreateResourceFailedException
     * @throws Throwable
     */
    private function createSuperAdmin(): void
    {
        $userData = [
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'f_name' => 'Super',
            'l_name' => 'Admin',
            'phone' => '88005553535'
        ];

        $this->createAdminAction->run($userData);
    }
}
