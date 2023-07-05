<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Actions\Datatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\BrandResource;

class BrandController extends Controller
{
    public function getQuery(Request $request)
    {
        return Brand::query();
    }

    public function datatable(Request $request)
    {
        $list = (new Datatable($request))->setQuery(function () use ($request) {
            return $this->getQuery($request);
        })->setFilterQuery(function($q) use ($request) {
            return $q;
        })->process(function($q, $skip, $take){
            return BrandResource::collection(
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

        return view('admin.brand.index');
    }

    public function addOrUpdate(Request $request)
    {
        $data = Brand::updateOrCreate(
            [
                'id' => $request->id ?? null,
            ],
            [
                'name' => $request->name
            ]
        );

        return $data;
    }

    public function trash(Request $request)
    {
        Brand::destroy($request->id);

        return true;
    }

    public function updateStatus(Request $request)
    {
        Brand::find($request->id)->update([
            'status' => DB::raw('NOT status')
        ]);

        return true;
    }
}
