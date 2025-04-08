<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LogController;
use App\Http\Controller\DependencyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use lluminate\Routing\RouteRegistrar;
use App\Http\Controllers\JobqueueController;

//Default Home page
Route::get('/default',[AuthController::class,"Opendefaultpage"]);

//Authentication
Route::group(['middleware' => 'auth'], function () {
    Route::view("/", view: "welcome")
    ->name(name:"home");

 //Custom loggs 
 Route::get('/log',[App\Http\Controllers\LogController::class,"logging"])->middleware('auth');
   
});

//Login page
Route::get("/login",[AuthController::class,"login"])
->name(name:"login");

Route::post("/login",[AuthController::class,"loginPost"])
->name(name: "login.post");

//Registration page
Route::get("/register",[AuthController::class,"register"])
->name(name: "register");;

Route::post("/register",[AuthController::class,"registerPost"])
->name(name: "register.post");

//Attach pdf file to send email
Route::get('/generateemail',[PdfController::class,"generateemailpdf"])
->name(name: "generateuserdata")->middleware('auth');

//Generate pdf file
Route::get('pdf_generator',[PdfController::class,"generatepdf"]);

//Store PDFs securely (not publicly accessible via direct URL).
Route::get('uploadedfile/{filename}',[FileController::class,"getFile"])
->name(name:"getfile")->middleware('auth');

//Laravel Queues 
//Route::get('JobQueue', [JobqueueController::class,'index'])
//->name(name:"index")->middleware('auth');

 //logout
 Route::get('logout',[AuthController::class,"adminlogout"])
 ->name(name:"adminlogout");

 //dependency injection
 Route::get('Dependency',[App\Http\Controllers\DependencyController::class,"Invoke"]);
 

 
