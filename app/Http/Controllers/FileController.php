<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke($file_path)
    {
        if (!Storage::disk('local')->exists($file_path) || (!Gate::allows('manage-data'))) {
            abort(404);
        }

        $local_path = config('filesystems.disks.local.root') . DIRECTORY_SEPARATOR . $file_path;

        return response()->file($local_path);
    }
}