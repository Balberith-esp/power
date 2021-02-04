<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserAuth extends Controller
{
    //Login Auth
    function userLogin(Request $req){


        $user = User::where('email', $req->input('email'))->get();

        if($req->input('password')==Crypt::decrypt($user[0]->password)){
            $req->session()->put('user',$user[0]);
            // return $user[0]->roles;
            return redirect('/');
        }else{
            return redirect('/');
        }

    }
}
