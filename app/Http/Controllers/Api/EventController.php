<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\EventResource;
use App\Http\Resources\SingleEventResource;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventController extends ApiController
{
    public function index(Request $request): JsonResponse
    {
        $articles = Article::query()->where(['type' => 'events'])->where(['in_homepage' => 1]);
        if (isset($request->category_id))
            $articles = $articles->where(['category_id' => $request->category_id]);
        return $this->sendResponse(EventResource::collection($articles->get()), 'Events');
    }

    public function show($slug): JsonResponse
    {
        $article = Article::query()->where(['type' => 'events'])->where(['slug' => $slug])->get();
        return $this->sendResponse(SingleEventResource::collection($article));
    }
}
