<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //

    Public function getFile($filename)
    {
        
            return response()->download(Storage_path('app/public/upload/'.$filename),null,[],null);
        
       
    }
}
