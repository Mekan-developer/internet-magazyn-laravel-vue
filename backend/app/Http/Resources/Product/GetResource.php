<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\GetResource as CategoryGetResource;
use App\Http\Resources\Color\GetResource as ColorGetResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $products = Product::where('group_id', $this->group_id)->get();
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "content" => $this->content,
            "image_url" => $this->imageUrl,
            "price" => $this->price,
            "count" => $this->count,
            "is_published" => $this->is_published,
            "category" => new CategoryGetResource($this->category),
            'group_products' => GetMinResource::collection($products),
             "colors" => ColorGetResource::collection($this->colors),
        ];
    }
}
