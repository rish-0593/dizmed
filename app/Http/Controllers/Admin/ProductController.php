<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() : View {
        return view('admin.product.index');
    }

    function add(Request $request) {
        return view('admin.product.partials._product');
    }
}
