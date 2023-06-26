<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends ApiController
{
    public function index(Request $request): JsonResponse
    {

        $projects = Project::query();
//        if (isset($request->category_id))
//            $projects = $projects->whereJsonContains('category_ids', $request->category_id);
        $projects = $projects->get();
//        return $this->sendResponse($projects);
        return $this->sendResponse(ProjectResource::collection($projects));
    }
}
