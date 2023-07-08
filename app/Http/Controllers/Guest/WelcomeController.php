<?php

namespace App\Http\Controllers\Guest;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class WelcomeController extends Controller
{
    public function welcome() : View
    {
        $categories = Category::active()->get();
        $brands = Brand::active()->get();

        return view('guest.welcome', compact('categories', 'brands'));
    }
}
