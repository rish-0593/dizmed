<?php

namespace App\Http\Controllers\Guest;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ShopController extends Controller
{
    public function shop() : View
    {
        $categories = Category::active()->get();
        $brands = Brand::active()->get();

        $products = Product::with('brand', 'category', 'images')->get();

        return view('guest.shop', compact('categories', 'brands', 'products'));
    }
}
