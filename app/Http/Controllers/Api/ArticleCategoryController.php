<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\ArticleCategoryResource;
use App\Models\ArticleCategory;
use Illuminate\Http\JsonResponse;

class ArticleCategoryController extends ApiController
{

    public function index(): JsonResponse
    {
        $categories = ArticleCategory::query()->get();
        return $this->sendResponse(ArticleCategoryResource::collection($categories));
    }
}
