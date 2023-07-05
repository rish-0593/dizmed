<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attribute;
use App\Actions\Datatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\AttributeResource;

class AttributeController extends Controller
{
    public function getQuery(Request $request)
    {
        return Attribute::query();
    }

    public function datatable(Request $request)
    {
        $list = (new Datatable($request))->setQuery(function () use ($request) {
            return $this->getQuery($request);
        })->setFilterQuery(function($q) use ($request) {
            return $q;
        })->process(function($q, $skip, $take){
            return AttributeResource::collection(
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

        return view('admin.attribute.index');
    }

    public function addOrUpdate(Request $request)
    {
        $data = Attribute::updateOrCreate(
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
        Attribute::destroy($request->id);

        return true;
    }

    public function updateStatus(Request $request)
    {
        Attribute::find($request->id)->update([
            'status' => DB::raw('NOT status')
        ]);

        return true;
    }
}
