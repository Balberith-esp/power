<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req){


        $user = User::where('email', $req->input('email'))->get();

        $decrypted = Crypt::decrypt($user[0]->password);

        if($req->input('password')==$decrypted){
            $req->session()->put('user',$user[0]);
            return redirect('/');
        }else{
            return redirect('/');
        }

    }
}
