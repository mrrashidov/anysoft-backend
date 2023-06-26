<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class SingleEventResource extends JsonResource
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
            'body' => $this->body,
            'images' => collect($this->images)->map(function ($image) {
                return env('CDN_HOST') . $image;
            }),
            'category' => $this->category?->name,
            'created_at' => $this->created_at,
            'author' => $this->author?->name,
        ];
    }

}
