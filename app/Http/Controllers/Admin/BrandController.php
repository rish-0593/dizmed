<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index() : View {
        return view('admin.brand.index');
    }
}
