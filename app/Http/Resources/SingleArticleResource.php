<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class SingleArticleResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'image' => env('CDN_HOST') . $this->image,
            'category' => $this->category?->name,
            'category_id' => $this->category?->id,

            'created_at' => $this->created_at,
            'author_name' => $this->author?->name,
            'author_image' => env('CDN_HOST') . $this->author?->image,
            'author_role' => $this->author?->role,

        ];
    }
}
