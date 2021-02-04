<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function enviaEmail(String $tipo){
        $correo = new  ContactoMailable($tipo);
        Mail::to(session()->get('user')->email)->send($correo);
        return redirect('/');
    }
}
