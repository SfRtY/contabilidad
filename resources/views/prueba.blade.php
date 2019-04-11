@extends('layouts.app')
@section('title','formulario')
@section('scr')
<script>
    function load() {
        var tipo='<?php echo session("buscar")->Tinsc;?>';
        if(tipo=='Miembro Pleno'){
            document.getElementById("tipo1").checked = true;
            document.getElementById("tipo2").checked = false;
            document.getElementById("tipo3").checked = false;
            document.getElementById("tipo4").checked = false;
        }
        else if(tipo=='Corporativo'){
            document.getElementById("tipo1").checked = false;
            document.getElementById("tipo2").checked = true;
            document.getElementById("tipo3").checked = false;
            document.getElementById("tipo4").checked = false;
        }else if(tipo=='Observador'){
            document.getElementById("tipo1").checked = false;
            document.getElementById("tipo2").checked = false;
            document.getElementById("tipo3").checked = true;
            document.getElementById("tipo4").checked = false;
        }
        else{
            document.getElementById("tipo1").checked = false;
            document.getElementById("tipo2").checked = false;
            document.getElementById("tipo3").checked = false;
            document.getElementById("tipo4").checked = true;
        }
        var select=document.getElementById("cdepart");
        var v='<?php echo session("buscar")->CodDepart;?>';
        for(var f=0;f<select.length;f++){
            if(select.options[f].text==v){
                select.selectedIndex=f;
            }
        }
        var mp='<?php echo session("buscar")->modpago;?>';
        if(mp=='Efectivo'){
            document.getElementById("modpago1").checked = true;
            document.getElementById("modpago2").checked = false;
        }
        else{
            document.getElementById("modpago1").checked = false;
            document.getElementById("modpago2").checked = true;
        }
        var com='<?php echo session("buscar")->comprobante;?>';
        if(com=='Factura'){
            document.getElementById("checkcomprobante1").checked = true;
            document.getElementById("checkcomprobante2").checked = false;
        }
        else{
            document.getElementById("checkcomprobante1").checked = false;
            document.getElementById("checkcomprobante2").checked = true;
        }
    }
    window.onload = load;
</script>    
@endsection
@section('content')
    <div class="container" style="margin-top:50px">
        <h1>MODIFICAR FICHA DE INSCRIPCION</h1>
        @foreach (session('id') as $b)
        <form class="form-group" method="GET" action="{{url("actualizar/{$b}")}}">
        @endforeach
            @csrf
            <div class="form-group"><h4 for="exampleInputEmail1">TIPO DE INSCRIPCIÓN :</h4></div>
            <div class="form-group">
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tipoins" type="radio" id="tipo1" value="Miembro Pleno">
                            <label class="form-check-label" for="tipo1">Miembro Pleno</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tipoins" type="radio" id="tipo2" value="Corporativo">
                            <label class="form-check-label" for="tipo2">Corporativo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tipoins" type="radio" id="tipo3" value="Observador">
                            <label class="form-check-label" for="tipo3">Observador</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tipoins" type="radio" id="tipo4" value="Estudiante">
                            <label class="form-check-label" for="tipo3">Estudiante</label>
                        </div>
            </div>

            <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nombres:</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="name" maxlength="25" placeholder="Ingresar el nombre" value="{{session('buscar')->nombre}}" required>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="surname" class="col-sm-3 col-form-label">Apellidos:</label>
                    <div class="col-sm-9">
                    <input type="text" name="surname" class="form-control" id="surname" maxlength="25" placeholder="Ingresar el apellido" value="{{session('buscar')->apellido}}" required> 
                    </div>
                </div>
    
    
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label">DNI:</label>
                    <div class="col-sm-9">
                    <input type="text" name="dni" class="form-control" id="dni" placeholder="Ingresar el DNI" maxlength="8" value="{{session('buscar')->dni}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label">E - Mail:</label>
                    <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="email" maxlength="50" placeholder="Ingresar el email" value="{{session('buscar')->email}}" required>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label">Teléfono/Celular:</label>
                    <div class="col-sm-9">
                    <input type="text" name="tel" class="form-control" id="tel" maxlength="15" placeholder="Ingresar el telefono o celular" value="{{session('buscar')->celular}}" required>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label">Domicilio:</label>
                    <div class="col-sm-9">
                    <input type="text" name="domic" class="form-control" id="tel" maxlength="50" placeholder="Ingresar el domicilio" value="{{session('buscar')->domicilio}}" required>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label">Código Departamental:</label>
                        <div class="col-sm-9">
                            <select name="cdepart" id="cdepart" class="form-control">
                                <option value="Amazonas">Amazonas</option>
                                <option value="Ancash">Ancash</option>
                                <option value="Apurimac">Apurimac</option>
                                <option value="Arequipa">Arequipa</option>
                                <option value="Ayacucho">Ayacucho</option>
                                <option value="Cajamarca">Cajamarca</option>
                                <option value="Callao">Callao</option>
                                <option value="Cusco">Cusco</option>
                                <option value="Huancavelica">Huancavelica</option>
                                <option value="Huanuco">Huanuco</option>
                                <option value="Ica">Ica</option>
                                <option value="Junin">Junin</option>
                                <option value="La libertad">La libertad</option>
                                <option value="Lambayeque">Lambayeque</option>
                                <option value="Lima">Lima</option>
                                <option value="Loreto">Loreto</option>
                                <option value="Madre de Dios">Madre de Dios</option>
                                <option value="Moquegua">Moquegua</option>
                                <option value="Pasco">Pasco</option>
                                <option value="Piura">Piura</option>
                                <option value="Puno">Puno</option>
                                <option value="San Martin">San Martin</option>
                                <option value="Tacna">Tacna</option>
                                <option value="Tumbes">Tumbes</option>
                                <option value="Ucayali">Ucayali</option>
                            </select>
                        </div>
                </div>
    
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label">CPC-CPCC-OTROS:</label>
                    <div class="col-sm-9">
                    <input type="text" name="cpc" class="form-control" id="tel" maxlength="25"  placeholder="Ingresar CPC-CPCC-OTROS" value="{{session('buscar')->cpc}}">
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label">N° de Colegiatura:</label>
                    <div class="col-sm-9">
                    <input type="text" name="numcoleg" class="form-control" id="tel" maxlength="10" placeholder="Ingresar numero de colegiatura" value="{{session('buscar')->numcoleg}}"> 
                    </div>
                </div>
                <div class="form-group"><h4 for="exampleInputEmail1">MODALIDAD DE PAGO :</h4></div>
                <div class="form-row">
                <div class="form-group col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" name="ModPago" type="radio" id="modpago1" value="Efectivo">
                        <label class="form-check-label" for="modpago1">Efectivo</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="modpago1"></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="ModPago" type="radio" id="modpago2" value="Abono Cuenta">
                        <label class="form-check-label" for="modpago2">Abono de Cuenta</label>
                    </div>
                </div>
                <div class="form-group col-md-9">
                    <label for="dni">Deposito/Cheque N°:</label>
                    <input type="text" name="DepositoC" class="form-control" id="tel" maxlength="25" placeholder="Deposito o numero de cheque" value="{{session('buscar')->numdeposit}}" required>
                </div>
                </div>
    
                <div class="form-group"><h4 for="exampleInputEmail1">COMPROBANTE A EMITIR :</h4></div>
                
                <div class="form row">
                <div class="form-group col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" name="ComprobanteE" type="radio" id="checkcomprobante1" value="Factura">
                        <label class="form-check-label" for="inlineCheckbox1">Factura</label>
                    </div>
                    <div class="form-check">
                            <label class="form-check-label" for="inlineCheckbox2"></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="ComprobanteE" type="radio" id="checkcomprobante2" value="Boleta">
                        <label class="form-check-label" for="inlineCheckbox2">Boleta de Venta</label>
                    </div>
                </div>
    
                <div class="form-group col-md-9">
                        <div class="form-group row">
                                <label for="dni" class="col-sm-3 col-form-label">Razón Social:</label>
                                <div class="col-sm-9">
                                <input type="text" name="RazSoc" class="form-control" id="tel" maxlength="25" placeholder="Rázon Social" value="{{session('buscar')->rsoc}}" required>
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label for="dni" class="col-sm-3 col-form-label">RUC:</label>
                                <div class="col-sm-9">
                                <input type="text" name="RUC" class="form-control" id="tel" maxlength="11" placeholder="Numero de RUC" value="{{session('buscar')->ruc}}" required>
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label for="dni" class="col-sm-3 col-form-label">Dirección:</label>
                                <div class="col-sm-9">
                                <input type="text" name="Direcc" class="form-control" id="tel" maxlength="50" placeholder="Deposito o numero de cheque" value="{{session('buscar')->direccion}}" required>
                                </div>
                            </div>
                </div>
                </div>
                <div class="form-group row">
                <label for="dni" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">MODIFICAR</button>
                </div>
                </div>
            </form>
        </div>
        @if(session('msg'))
        <div class="alert alert-success" role="alert">
            {{session('msg')}}
        </div>
        @endif
@endsection
