<?php

/**
 * @apiGroup           Post
 * @apiName            GetAllPosts
 *
 * @api                {GET} /v1/posts Get All Posts
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

use App\Containers\BlogSection\Post\UI\API\Controllers\GetAllPostsController;
use Illuminate\Support\Facades\Route;

Route::get('posts', [GetAllPostsController::class, 'getAllPosts'])
    ->middleware(['auth:api']);

