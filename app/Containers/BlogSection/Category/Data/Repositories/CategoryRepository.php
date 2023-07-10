<?php

namespace App\Containers\BlogSection\Category\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class CategoryRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
