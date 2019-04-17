<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dom()
    {
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
                        right: 20px;
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
                        <div class="nombre">Luis Manuel Contreras Moreno</div>
                        <div class="categoria">Miembro pleno </div>
                        <div class="dni">77777777</div>
                        <div class="codigo">100</div>
                </div>
            </body>
        </html>')->setPaper(array(0,0,255.114,340.152),'portrait');
        return $pdf->stream('credencial.pdf');
    }
    public function index()
    {
        $nombre=Auth::user()->name;
        return view('form')->with('nombre',$nombre);
    }
    public function doc(){
        return view('doc');
    }
    public function formulario(){
        return view('form');
    }
    public function eliminar(){
        return view('delete');
    }
    public function prueba(){
        return view('prueba');
    }
    public function resultado(){
        return view('answer');
    }
    public function reporte(){
        return view('report');
    }
    public function modificar(){
        return view('update');
    }
    public function modificarp(){
        return view('prueba');
    }
    public function buscarp(){
        return view('search');
    }
    /*public function home(){
        return view('auth/login');
    }*/
}
