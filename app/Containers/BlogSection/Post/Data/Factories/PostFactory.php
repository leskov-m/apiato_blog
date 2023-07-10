<?php

namespace App\Containers\BlogSection\Post\Data\Factories;

use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class PostFactory extends ParentFactory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
