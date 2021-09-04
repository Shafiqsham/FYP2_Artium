<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['Username'=>$req->Username])->first();
        if(!$user || !Hash::check($req->Password,$user->Password))
        {
            return "Username or password is not matched";
            
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/product');
        }
        

    }
    function register(Request $req)
    {
        //return $req->input();
        $user = new User;
        $user->Username=$req->Username;
        $user->Email=$req->Email;
        $user->Password=Hash::make($req->Password);
        $user->save();
        return redirect('/login');



    }
}
