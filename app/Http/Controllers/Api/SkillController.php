<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;

class SkillController extends ApiController
{
    public function index(): JsonResponse
    {
        return $this->sendResponse(SkillResource::collection(Skill::query()->get()));
    }
}
