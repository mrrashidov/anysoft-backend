<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\SingleArticleResource;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends ApiController
{
    public function index(Request $request): JsonResponse
    {
        $articles = Article::query()->where(['type' => 'news']);
        if (isset($request->category_id)) {
            $articles = $articles->where(['in_homepage' => $request->in_homepage]);
        }
        if (isset($request->category_id))
            $articles = $articles->where(['category_id' => $request->category_id]);

        return $this->sendResponse(ArticleResource::collection($articles->get()), 'News');
    }

    public function show($slug): JsonResponse
    {
        $article = Article::query()->where(['slug' => $slug])->first();
        if (!$article)
            return $this->sendError('Not found!', [], 404);
        return $this->sendResponse(new SingleArticleResource($article));
    }
}
