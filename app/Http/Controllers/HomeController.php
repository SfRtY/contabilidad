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
    public function index()
    {
        $nombre=Auth::user()->name;
        return view('form')->with('nombre',$nombre);
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
