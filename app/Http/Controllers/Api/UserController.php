<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\EmailSubscription;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    public function subscribe(Request $request): JsonResponse
    {
        try {
            EmailSubscription::query()->create(['email' => $request->email]);
        } catch (Exception $exception) {
            return $this->sendError($exception->getMessage());
        }
        return $this->sendResponse("Subscribed!");
    }
}
