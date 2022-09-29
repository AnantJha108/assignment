<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){
        if($req->isMethod("post")){
            $data = $req->only("email","password");

            if(Auth::attempt($data)){
                return redirect()->route("homepage");
            }
            else{
                return redirect()->back()->with("msg","login fail try again ");
            }
        }
        return view("user.login");
    }

    public function logout(){
        Auth::guard("web")->logout();
        return redirect()->route("login");
    }

    public function adminLogin(Request $req){
        if($req->isMethod("post")){
            $data = $req->only("email","password");

            if(Auth::guard('admin')->attempt($data)){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->back()->with("msg","login fail try again ");
            }
        }
        return view("admin.login");
    }

    public function adminLogout(){
        Auth::guard("admin")->logout();
        return redirect()->route("admin.login");
    }
}
