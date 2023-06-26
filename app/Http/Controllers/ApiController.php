<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class ApiController extends Controller
{
    /**
     * success response method.
     *
     * @param $result
     * @param string $message
     * @return JsonResponse
     */
    public function sendResponse($result, string $message = "Index"): JsonResponse
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $result,
        ];
        return response()->json($response, 200);
    }

    /**
     * index response method.
     *
     * @param $result
     * @param $meta
     * @param $filters
     * @return JsonResponse
     */
    public function sendData($result, $meta, $filters): JsonResponse
    {


        $response = [
            'success' => true,
            "message" => 'Data retrieved successfully!',
            'data' => $result,
            'filter' => $filters,
            '_meta' => $meta,
        ];


        return response()->json($response, 200);
    }

    /**
     * return error response.
     *
     * @param $error
     * @param array $errorMessages
     * @param int $code
     * @return JsonResponse
     */
    public function sendError($error, array $errorMessages = [], int $code = 500): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
