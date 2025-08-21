<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Http\Resources\Product\GetResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $colors = Color::all();
        $tags = Tag::all();

        $maxPrice = Product::max('price'); // вместо orderBy + first
        $minPrice = Product::min('price');

        $result = [
            'categories' => $categories,
            'colors'     => $colors,
            'tags'       => $tags,
            'price'      => [
                'maxPrice' => $maxPrice,
                'minPrice' => $minPrice,
            ],
        ];

        return response()->json($result);
    }


    public function dataFiltering(FilterRequest $request){
        $data = $request->validated();
        $filter = app()->make(ProductFilter::class,['queryParams' => array_filter($data)]);
        $products = Product::filter($filter)->get();
        return GetResource::collection($products)->resolve();;
    }
}
