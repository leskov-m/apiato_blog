<?php

/**
 * @apiGroup           Tag
 * @apiName            CreateTag
 *
 * @api                {POST} /v1/tags Create Tag
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

use App\Containers\BlogSection\Tag\UI\API\Controllers\CreateTagController;
use Illuminate\Support\Facades\Route;

Route::post('tags', [CreateTagController::class, 'createTag'])
    ->middleware(['auth:api']);

