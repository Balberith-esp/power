<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req){

        $credentials = $req->only('email', 'password');


        if (Auth::attempt($credentials)) {

            return redirect('/Perfil');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
