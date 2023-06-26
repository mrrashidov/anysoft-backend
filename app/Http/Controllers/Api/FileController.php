<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Services\Filemanager\UploadFileService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FileController extends ApiController
{


    public function __construct()
    {
        $this->fileService = new UploadFileService();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function upload(Request $request): JsonResponse
    {
        try {
            $model = $this->fileService->upload($request->file('file'));
        } catch (Exception $exception) {
            return $this->sendError($exception->getMessage());
        }
        return $this->sendResponse($model, 'File successfully uploaded');

    }
}
