<?php

namespace App\Containers\AppSection\User\Tests\Unit;

use App\Containers\AppSection\User\Tests\UnitTestCase;
use Illuminate\Support\Facades\Schema;

/**
 * @group user
 * @group unit
 */
class UsersMigrationTest extends UnitTestCase
{
    public function test_users_table_has_expected_columns(): void
    {
        $columns = [
            'id',
            'name',
            'email',
            'password',
            'email_verified_at',
            'gender',
            'remember_token',
            'created_at',
            'updated_at',
        ];

        foreach ($columns as $column) {
            $this->assertTrue(Schema::hasColumn('users', $column));
        }
    }
}
