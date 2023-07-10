<?php

namespace App\Containers\BlogSection\Tag\UI\API\Transformers;

use App\Containers\BlogSection\Tag\Models\Tag;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class TagTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Tag $tag): array
    {
        $response = [
            'object' => $tag->getResourceKey(),
            'id' => $tag->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $tag->id,
            'created_at' => $tag->created_at,
            'updated_at' => $tag->updated_at,
            'readable_created_at' => $tag->created_at->diffForHumans(),
            'readable_updated_at' => $tag->updated_at->diffForHumans(),
            // 'deleted_at' => $tag->deleted_at,
        ], $response);
    }
}
