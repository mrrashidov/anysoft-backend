<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\TechnologyCategoryResource;
use App\Models\Technology;
use App\Models\TechnologyCategory;
use Illuminate\Http\JsonResponse;

class TechnologyController extends ApiController
{
    public function index(): JsonResponse
    {
        $result = TechnologyCategory::query()->get();
        return $this->sendResponse(TechnologyCategoryResource::collection($result));
    }
}
