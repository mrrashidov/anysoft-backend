<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\JsonResponse;

class ReviewController extends ApiController
{
    public function index(): JsonResponse
    {
        $reviews = Review::query()->get();

        return $this->sendResponse(ReviewResource::collection($reviews));

    }
}
