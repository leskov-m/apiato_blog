<?php

/**
 * @apiGroup           Post
 * @apiName            FindPostById
 *
 * @api                {GET} /v1/posts/:id Find Post By Id
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

use App\Containers\BlogSection\Post\UI\API\Controllers\FindPostByIdController;
use Illuminate\Support\Facades\Route;

Route::get('posts/{id}', [FindPostByIdController::class, 'findPostById'])
    ->middleware(['auth:api']);

