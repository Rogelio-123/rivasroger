<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Download extends Controller
{
    public function downloadFile($file)
    {
        $pathtoFile = public_path() . '/images/' . $file;
        return response()->download($pathtoFile);
        // return $pathtoFile;
    }
}
