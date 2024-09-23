<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //Resume of Mahadi Razib.pdf
    public function download_cv(){
        $file = public_path('storage/pdf/Resume of Mahadi Razib.pdf');

        return response()->download($file);
    }
}
