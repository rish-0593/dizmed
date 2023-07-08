<?php

namespace App\Http\Controllers\Guest;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product(Request $request, $slug) : View
    {
        $product = Product::where('slug', $slug)->with('brand', 'category', 'tags', 'attributes')->firstOrFail();

        return view('guest.product', compact('product'));
    }
}
