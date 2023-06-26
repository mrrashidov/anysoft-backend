<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\JsonResponse;

class
TeamController extends ApiController
{
    public function index(): JsonResponse
    {
        return $this->sendResponse(TeamResource::collection(Team::query()->get()));
    }
}
