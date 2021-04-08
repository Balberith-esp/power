<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Throwable;

class UserAuth extends Controller
{
    //Login Auth
    function userLogin(Request $req){

        try{
            $user = User::where('email', $req->input('email'))->get();
            if($req->input('password')==Crypt::decrypt($user[0]->password)){
                $req->session()->put('user',$user[0]);
                return redirect('/');
            }else{
                return redirect('/');
            }
        }catch(Throwable $e){
            return redirect('/');
        }



    }
}
