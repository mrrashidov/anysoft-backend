<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\ServiceResource;
use App\Models\Service;

class ServiceController extends ApiController
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse(ServiceResource::collection(Service::query()->get()));
    }
}
