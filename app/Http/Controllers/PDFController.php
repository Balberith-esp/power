<?php

namespace App\Http\Controllers;

use App\Models\Recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    //

    public function generaPDF ($item){

        $filename = Recurso::select('path')
                            ->where('user_id','=',session()->get('user')->id)
                            ->where('commentable_id', '=', $item->id);
                            // ->where('commentable_type', '=', $item->tipo );

        // $filename = '../resources/assets/pdf/1617117135.1.pdf';

        $fileinfo = pathinfo($filename);
        $sendname = $fileinfo['filename'] . '.' . strtoupper($fileinfo['extension']);

        header('Content-Type: application/pdf');
        header("Content-Disposition: attachment; filename=\"$sendname\"");
        header('Content-Length: ' . filesize($filename));
        // readfile($filename);
        return $item->tojson();
    }

    public function muestraPDF (){
        // $pdf = App::make('dompdf.wrapper');
        $filename = '../resources/assets/pdf/1617124045.1.pdf';
        header("Content-type: application/pdf");
        header("Content-Length: ".filesize($filename));
        header("Content-Disposition: inline; filename=proyecto.pdf");


        readfile($filename);

    }

    // public function guardaPDF (){
    //     $pdf = App::make('dompdf.wrapper');
    //     $pdf->loadView('pdf.ejercicio');
    //     return $pdf->loadView('pdf.ejercicio')->save(public_path('../resources/assets/pdf/prueba.pdf'))->stream('prueba.pdf');
    // }

}
