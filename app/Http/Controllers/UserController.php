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
        if($user || Hash::check($req->Password,$user->Password))
        {
            return "Username or password is incorrect";
        }
        else {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
