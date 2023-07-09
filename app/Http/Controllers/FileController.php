<?php

namespace App\Http\Controllers;

use App\Models\FileContent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function process(Request $request)
    {
        $files = $request->allFiles();

        if (empty($files)) {
            abort(422, 'No files were uploaded.');
        }

        if (count($files) > 1) {
            abort(422, 'Only 1 file can be uploaded at a time.');
        }

        $requestKey = array_key_first($files);

        $file = is_array($request->input($requestKey))
        ? $request->file($requestKey)[0]
        : $request->file($requestKey);

        return $file->store(
            path: 'tmp/'.now()->timestamp.'-'.Str::ulid()
        );
    }

    public function revert(Request $request)
    {
        $id = $request->id;

        $fileContent = FileContent::find($id);

        $content = $fileContent->content;

        Storage::disk('public')->delete($content);

        $fileContent->delete();

        return response()->json('Success', 200, ['Content-Type' => 'text/plain']);;
    }
}
