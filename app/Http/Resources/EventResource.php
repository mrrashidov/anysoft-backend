<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class EventResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'image' => env('CDN_HOST') . $this->image,
            'category' => $this->category?->name,
            'category_id' => $this->category?->id,

            'in_top' => $this->in_top,
            'in_homepage' => $this->in_homepage,
            'created_at' => $this->created_at,
        ];
    }
}
