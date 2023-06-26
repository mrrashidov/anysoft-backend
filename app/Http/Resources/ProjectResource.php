<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'about' => $this->about,
            'year' => $this->year,
            'link' => $this->link,
            'categories' => $this->categories->pluck('name'),
            'category_ids' => $this->categories->pluck('id'),
            'technologies' => $this->technologies->pluck('name'),
            'image' => env('CDN_HOST') . $this->image
        ];
    }
}
