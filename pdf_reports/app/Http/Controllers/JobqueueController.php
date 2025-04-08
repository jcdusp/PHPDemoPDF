<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Jobs\SendPostNotification;

class JobqueueController extends Controller
{
    public function index()
    {
            $obj=new Post;
            $obj->title='New Post';
            $obj->save();

            SendPostNotification::dispatch();  
            dd('Email is sent');
    }
}
