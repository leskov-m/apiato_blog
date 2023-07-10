<?php

/**
 * @apiGroup           Post
 * @apiName            CreatePost
 *
 * @api                {POST} /v1/posts Create Post
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\BlogSection\Post\UI\API\Controllers\CreatePostController;
use Illuminate\Support\Facades\Route;

Route::post('posts', [CreatePostController::class, 'createPost'])
    ->middleware(['auth:api']);

