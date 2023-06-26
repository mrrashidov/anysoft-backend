<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\JsonResponse;

class ClientController extends ApiController
{
    public function index():JsonResponse
    {
        $clients = Client::query()->get();
        return $this->sendResponse(ClientResource::collection($clients));
    }
}
