<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Inscripcion extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function Registrar(Request $re){
        $dni=$re->input('dni');
        $buscar=\App\MIncripcion::where('dni',$dni)->get();
        $var=0;
        foreach ($buscar as $b) {
            $var=$b->dni;    
        }
        if(empty($var)){
            $in=new \App\MIncripcion();
            $in->FechInsc=Carbon::now();
            $in->nombre=$re->input('name');
            $in->apellido=$re->input('surname');
            $in->Tinsc=$re->input('tipoins');
            $in->dni=$re->input('dni');
            $in->email=$re->input('email');
            $in->celular=$re->input('tel');
            $in->domicilio=$re->input('domic');
            $in->CodDepart=$re->input('cdepart');
            $in->cpc=$re->input('cpc');
            $in->numcoleg=$re->input('numcoleg');
            $in->modpago=$re->input('ModPago');
            $in->numdeposit=$re->input('DepositoC');
            $in->comprobante=$re->input('ComprobanteE');
            $in->rsoc=$re->input('RazSoc');
            $in->ruc=$re->input('RUC');
            $in->direccion=$re->input('Direcc');
            $in->iduser=Auth::id();
            $in->save();
            $dni=$re->input('dni');
            $buscar=\App\MIncripcion::where('dni',$dni)->get();
            $var='';
            foreach ($buscar as $b) {
                $var=$b->IdInscripcion;    
            }
            return redirect('formulario')->with('msg','El participante ha sido registrado con el ID N°'.$var)->with('f','alert-success');
        }
        else{
            return redirect('formulario')->with('msg','El participante ya esta registrado')->with('f','alert-warning');
        }
    }
    //Falta la fecha
    function Actualizar(Request $re, $IdInscripcion){
        $actualizar=\App\MIncripcion::find($IdInscripcion);
        $actualizar->dni=$re->input('dni');
        $actualizar->nombre=$re->input('name');
        $actualizar->apellido=$re->input('surname');
        $actualizar->Tinsc=$re->input('tipoins');
        $actualizar->email=$re->input('email');
        $actualizar->celular=$re->input('tel');
        $actualizar->domicilio=$re->input('domic');
        $actualizar->codDepart=$re->input('cdepart');
        $actualizar->cpc=$re->input('cpc');
        $actualizar->numcoleg=$re->input('numcoleg');
        $actualizar->modpago=$re->input('ModPago');
        $actualizar->numdeposit=$re->input('DepositoC');
        $actualizar->comprobante=$re->input('ComprobanteE');
        $actualizar->rsoc=$re->input('RazSoc');
        $actualizar->ruc=$re->input('RUC');
        $actualizar->direccion=$re->input('Direcc');
        $actualizar->iduser=Auth::id();
        $actualizar->save();
        return redirect('resultado')->with('msg','El usuario ha sido modificado correctamente');
    }
    function Show($IdInscripcion){
        $buscar=\App\MIncripcion::find($IdInscripcion);
        $id=$buscar->IdInscripcion;
        return redirect('modificarp')->with('buscar',$buscar)->with('id',array($id));
    }
    function Listar(){
        $lista=\App\MIncripcion::all();
        return view('list',compact('lista'));
    }
    function BuscarDni(Request $re){
        $dni=$re->input('bdni');
        $buscar=\App\MIncripcion::where('dni',$dni)->get();
        $var=0;
        foreach ($buscar as $b) {
            $var=$b->dni;    
        }
        if(empty($var)){
            return redirect('modificar')->with('msg','Participante no encontrado');    
        }
        else{
            return redirect('modificar')->with('buscar',$buscar);
        }  
    }
    function BuscarId(Request $re){
        $id=$re->input('bid');
        $buscar=\App\MIncripcion::where('IdInscripcion',$id)->get();
        $var=0;
        foreach ($buscar as $b) {
            $var=$b->IdInscripcion;    
        }
        if(empty($var)){
            return redirect('modificar')->with('msg','Participante no encontrado');    
        }
        else{
            return redirect('modificar')->with('buscar',$buscar);
        }  
    }
    function Delete($IdInscripcion){
        $delete=\App\MIncripcion::find($IdInscripcion);
        $delete->delete();
        return redirect('resultado')->with('msg','El usuario ha sido eliminado correctamente');
    }
    function Report(){
        $iduser=Auth::id();
        $Count=\App\MIncripcion::where('iduser',$iduser)->count();
        return redirect('reporte')->with('msg',Auth::user()->name.' inscribio a '.$Count.' participantes.');
    }
}
