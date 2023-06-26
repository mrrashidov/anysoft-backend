<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\StoreBriefRequest;
use App\Models\Brief;
use Exception;
use Illuminate\Http\JsonResponse;

class BriefController extends ApiController
{
    public function store(StoreBriefRequest $request): JsonResponse
    {
        try {
            Brief::query()->create($request->validated());
        } catch (Exception $exception) {
            return $this->sendError($exception->getMessage());
        }
        return $this->sendResponse('Stored!');
    }
}
