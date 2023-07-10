<?php

namespace App\Containers\BlogSection\Post\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PostRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
