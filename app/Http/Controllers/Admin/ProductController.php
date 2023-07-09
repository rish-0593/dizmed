<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Http\File;
use App\Actions\Datatable;
use App\Models\ProductTag;
use App\Models\FileContent;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Admin\ProductResource;

class ProductController extends Controller
{
    public function getQuery(Request $request)
    {
        return Product::query();
    }

    public function datatable(Request $request)
    {
        $list = (new Datatable($request))->setQuery(function () use ($request) {
            return $this->getQuery($request);
        })->setFilterQuery(function($q) use ($request) {
            return $q;
        })->process(function($q, $skip, $take){
            return ProductResource::collection(
                $q->orderByDesc('id')
                ->skip($skip)
                ->take($take)
                ->get()
            );
        });

        return $list;
    }

    public function index(Request $request)
    {
        if($request->ajax()){
            return $this->datatable($request);
        }

        return view('admin.product.index');
    }

    function add(Request $request)
    {
        $brands = Brand::active()->get();
        $categories = Category::active()->get();
        $tags = Tag::active()->get();
        $attributes = Attribute::active()->get();

        return view('admin.product.partials._product', compact('brands', 'categories', 'tags', 'attributes'));
    }

    public function addOrUpdate(Request $request)
    {
        $product = Product::updateOrCreate(
            [
                'id' => $request->id ?? null,
            ],
            $request->all()
        );

        // add tags
        $product->tags()->attach($request->tag_id);

        // add attributes
        $attributes = [];
        foreach ($request->attribute ?? [] as $value) {
            $attribute_type = $value['attribute_type'];
            $attribute_value = $value['attribute_value'];

            $attributes[$attribute_type]['value'] = $attribute_value;
        }

        $product->attributes()->attach($attributes);

        // add images
        foreach($request->product_image ?? [] as $image){
            $fileLocation = Storage::putFile(
                'products',
                new File(Storage::path($image)),
                'public'
            );

            FileContent::create([
                'model_id' => $product->id,
                'model_type' => Product::class,
                'content' => $fileLocation,
            ]);
        }

        return redirect()->back();
    }
}
