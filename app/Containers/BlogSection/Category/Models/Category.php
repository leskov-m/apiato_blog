<?php

namespace App\Containers\BlogSection\Category\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Category extends ParentModel
{
    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Category';
}
