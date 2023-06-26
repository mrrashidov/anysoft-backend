<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectCategoryResource;
use App\Models\ProjectCategory;
use Illuminate\Http\JsonResponse;

class ProjectCategoryController extends ApiController
{
    public function index(): JsonResponse
    {
        $project_categories = ProjectCategory::query()->get();
        return $this->sendResponse(ProjectCategoryResource::collection($project_categories));
    }
}
