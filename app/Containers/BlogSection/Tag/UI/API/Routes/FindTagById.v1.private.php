<?php

/**
 * @apiGroup           Tag
 * @apiName            FindTagById
 *
 * @api                {GET} /v1/tags/:id Find Tag By Id
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

use App\Containers\BlogSection\Tag\UI\API\Controllers\FindTagByIdController;
use Illuminate\Support\Facades\Route;

Route::get('tags/{id}', [FindTagByIdController::class, 'findTagById'])
    ->middleware(['auth:api']);

