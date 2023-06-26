<?php

use App\Http\Controllers\Api\ArticleCategoryController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\BriefController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\TechnologyController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ProjectCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'v1'
], function () {
    Route::get('skills/index', [SkillController::class, 'index']);
    Route::get('projects/index', [ProjectController::class, 'index']);
    Route::get('projects/category/index', [ProjectCategoryController::class, 'index']);

    Route::get('technologies/index', [TechnologyController::class, 'index']);
    Route::get('services/index', [ServiceController::class, 'index']);
    Route::get('team/index', [TeamController::class, 'index']);
    Route::get('clients/index', [ClientController::class, 'index']);

    Route::get('events/index', [EventController::class, 'index']);

    Route::get('news/index', [ArticleController::class, 'index']);
    Route::get('article/{slug}', [ArticleController::class, 'show']);
    Route::get('news/category/index', [ArticleCategoryController::class, 'index']);

    Route::post('brief/store', [BriefController::class, 'store']);
    Route::post('filemanager/upload', [Cyberbrains\Filemanager\Controllers\FileController::class, 'upload']);
    Route::post('filemanager/multi-upload', [Cyberbrains\Filemanager\Controllers\FileController::class, 'multiUpload']);

    Route::get('reviews/index', [ReviewController::class, 'index']);

    Route::get('data/budgets', [DataController::class, 'budgets']);
    Route::post('subscribe', [UserController::class, 'subscribe']);

});
