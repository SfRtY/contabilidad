<?php

namespace App\Http\Controllers;

require base_path("vendor/autoload.php");

use Illuminate\Http\Request;



class DocController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function example($IdInscripcion){
        //try {
        $buscar=\App\MIncripcion::find($IdInscripcion);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML('<!doctype html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Laravel</title>
                <style>
                    .contenedor{
                    margin-top: 50px;
                    position: relative;
                    display: inline-block;
                    text-align: center;
                    }  
                    .nombre{
                        position: absolute;
                        top: 60%;
                        right: 25px;
                        font-size: 15px;
                    }
                    .categoria{
                        position: absolute;
                        top: 81%;
                        right: 35%;
                        font-size: 15px;
                    }
                    .dni{
                        position: absolute;
                        top: 320px;
                        right: 68%;
                        font-size: 15px;
                    }
                    .codigo{
                        position: absolute;
                        top: 320px;
                        right: 25%;
                        font-size: 15px;
                    }
                </style>
            </head>
            <body>
                <div class="contenedor">
                        <div class="nombre">'.$buscar->nombre.' '.$buscar->apellido.'</div>
                        <div class="categoria">'.$buscar->Tinsc.'</div>
                        <div class="dni">'.$buscar->dni.'</div>
                        <div class="codigo">'.$buscar->IdInscripcion.'</div>
                </div>
            </body>
        </html>')->setPaper(array(0,0,255.114,340.152),'portrait');
        return $pdf->stream('credencial.pdf');

        // // ob_start();
        // // require_once base_path("resources/views/doc.blade.php");
        // // $html=ob_get_clean();
        // $html2pdf = new Html2Pdf();
        // $html2pdf->writeHTML('<!doctype html>
        // <html>
        //     <head>
        //         <meta charset="utf-8">
        //         <meta name="viewport" content="width=device-width, initial-scale=1">
        //         <title>Laravel</title>
        //         <style>
        //             .contenedor{
        //             margin-top: 50px;
        //             position: relative;
        //             display: inline-block;
        //             text-align: center;
        //             }  
        //             .nombre{
        //                 position: absolute;
        //                 top: 65%;
        //                 right: 35%;
        //                 font-size: 20px;
        //             }
        //             .categoria{
        //                 position: absolute;
        //                 top: 79%;
        //                 right: 40%;
        //                 font-size: 20px;
        //             }
        //             .dni{
        //                 position: absolute;
        //                 top: 94%;
        //                 right: 68%;
        //                 font-size: 20px;
        //             }
        //             .codigo{
        //                 position: absolute;
        //                 top: 94%;
        //                 right: 25%;
        //                 font-size: 20px;
        //             }
        //         </style>
        //     </head>
        //     <body>
        //         <div class="contenedor">
        //                 <img src="../public/images/congreso.jpg" width="100px" height="100px" alt="">
        //                 <div class="nombre">'.$buscar->nombre.' '.$buscar->apellido.'</div>
        //                 <div class="categoria">'.$buscar->Tinsc.'</div>
        //                 <div class="dni">'.$buscar->dni.'</div>
        //                 <div class="codigo">'.$buscar->IdInscripcion.'</div>
        
        //         </div>
        //     </body>
        // </html>');
        // $html2pdf->output();}
        // catch (Html2PdfException $e) {
        //     $html2pdf->clean();
        //     $formatter = new ExceptionFormatter($e);
        //     echo $formatter->getHtmlMessage();
        // }
    }
}
