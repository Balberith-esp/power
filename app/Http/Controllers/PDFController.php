<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Nutricion;
use App\Models\Recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    //

    public function generaEjercicioPDF ($item){

        $filename = Recurso::select('path')
                            ->where('commentable_id', '=', $item)
                            ->where('commentable_type', '=', 'ejercicio' )->get();

        $filename = (string)$filename[0]->path;
        $fileinfo = pathinfo($filename);
        $sendname = $fileinfo['filename'] . '.' . strtoupper($fileinfo['extension']);

        header('Content-Type: application/pdf');
        header("Content-Disposition: attachment; filename=\"$sendname\"");
        header('Content-Length: ' . filesize($filename));
        readfile($filename);

    }

    public function generaDietaPDF ($item){

        $filename = Recurso::select('path')
                            ->where('commentable_id', '=', $item)
                            ->where('commentable_type', '=', 'nutricion' )->get();

        $filename = (string)$filename[0]->path;
        $fileinfo = pathinfo($filename);
        $sendname = $fileinfo['filename'] . '.' . strtoupper($fileinfo['extension']);

        header('Content-Type: application/pdf');
        header("Content-Disposition: attachment; filename=\"$sendname\"");
        header('Content-Length: ' . filesize($filename));
        readfile($filename);

    }
    // public function visualizaEjercicioPDF ($item){

    //     $filename = Recurso::select('path')
    //                         ->where('commentable_id', '=', $item)
    //                         ->where('commentable_type', '=', 'ejercicio' )->get();

    //     $filename = (string)$filename[0]->path;
    //     // $pdf = App::make('dompdf.wrapper');
    //     // $filename = '../resources/assets/pdf/1617124045.1.pdf';
    //     header("Content-type: application/pdf");
    //     header("Content-Length: ".filesize($filename));
    //     header("Content-Disposition: inline; filename=proyecto.pdf");


    //     readfile($filename);

    // }
    // public function visualizaNutricionPDF ($item){

    //     $filename = Recurso::select('path')
    //                         ->where('commentable_id', '=', $item)
    //                         ->where('commentable_type', '=', 'ejercicio' )->get();

    //     $filename = (string)$filename[0]->path;
    //     // $pdf = App::make('dompdf.wrapper');
    //     // $filename = '../resources/assets/pdf/1617124045.1.pdf';
    //     header("Content-type: application/pdf");
    //     header("Content-Length: ".filesize($filename));
    //     header("Content-Disposition: inline; filename=proyecto.pdf");


    //     readfile($filename);

    // }


}
