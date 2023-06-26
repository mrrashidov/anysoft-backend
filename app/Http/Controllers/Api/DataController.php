<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DataController extends ApiController
{
    public function budgets(): JsonResponse
    {
        $data = [
            [
                'id' => 1,
                'name' => [
                    "uz" => "Менее 10 млн",
                    "ru" => "Менее 10 млн",
                    "en" => "Менее 10 млн"
                ],
            ],
            [
                'id' => 2,
                'name' => [
                    "uz" => "10–30 млн",
                    "ru" => "10–30 млн",
                    "en" => "10–30 млн"
                ],
            ],
            [
                'id' => 3,
                'name' => [
                    "uz" => "30–50 млн",
                    "ru" => "30–50 млн",
                    "en" => "30–50 млн"
                ],
            ]
        ];
        $data = [
            [
                'id' => 1,
                'name' => "Менее 10 млн",
            ],
            [
                'id' => 2,
                'name' => "10–30 млн",
            ],
            [
                'id' => 3,
                'name' => "30–50 млн",
            ]
        ];
        return $this->sendResponse($data);
    }
}
