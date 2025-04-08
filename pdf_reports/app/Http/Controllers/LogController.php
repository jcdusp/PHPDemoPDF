<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LogController extends Controller
{
    public function logging()
    {
        //$data=[];
        //echo 'test';
        //throw new \Exception("Helo world");
        log::channel('custom')->info("Helow world on custom log file.");
        return view(view: "log");
    }
}
