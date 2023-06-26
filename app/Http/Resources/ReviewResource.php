<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'company_name' => $this->company_name,
            'company_logo' => env('CDN_HOST') . $this->company_logo,
            'person_name' => $this->person_name,
            'person_logo' => env('CDN_HOST') . $this->person_logo,
            'text' => $this->text,

        ];
    }
}
