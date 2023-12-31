<?php

namespace App\Containers\BlogSection\Post\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Post extends ParentModel
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
    protected string $resourceKey = 'Post';
}
