<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Actions\Datatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\TagResource;

class TagController extends Controller
{
    public function getQuery(Request $request)
    {
        return Tag::query();
    }

    public function datatable(Request $request)
    {
        $list = (new Datatable($request))->setQuery(function () use ($request) {
            return $this->getQuery($request);
        })->setFilterQuery(function($q) use ($request) {
            return $q;
        })->process(function($q, $skip, $take){
            return TagResource::collection(
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

        return view('admin.tag.index');
    }

    public function addOrUpdate(Request $request)
    {
        $data = Tag::updateOrCreate(
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
        Tag::destroy($request->id);

        return true;
    }

    public function updateStatus(Request $request)
    {
        Tag::find($request->id)->update([
            'status' => DB::raw('NOT status')
        ]);

        return true;
    }
}
