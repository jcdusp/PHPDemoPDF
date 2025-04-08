<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{ 
  
    public function Opendefaultpage()
    {
        return view(view: "default");
    }
    public function login()
    {
        
        return view(view:"auth.login");
    }
    
    function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password"=>"required",
        ]);
        $credentials = $request ->only("email","password");
        if(Auth::attempt($credentials))
        {
            return redirect()->intended(route(name: "home"));
        }
        return redirect(route(name:"login"))
        ->with("error","Login failed");
    }
    function register()
    {
        return view(view:"auth.register");
    }
    function registerPost(Request $request)
    {
        $request->validate([
            "fullname" => "required",
            "email" => "required",
            "password"=>"required",
        ]);

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password =Hash::make(value:$request->password);

        if($user->save())
        {
            return redirect(route(name: "login"))
           ->with("success","User crated successfully");
        }
        return redirect(route(name:"register"))
            ->with("error","Failed to crate account");
    }
    function adminlogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/default');
    }

}
