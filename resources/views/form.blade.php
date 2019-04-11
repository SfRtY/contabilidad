@extends('layouts.app')
@section('title','formulario')
@section('content')
    <div class="container" style="margin-top:50px">
        @if(session('msg'))
        <div class="alert {{session('f')}}" role="alert">
                {{session('msg')}}
            </div>
        @endif
        <h1>FICHA DE INSCRIPCIÓN</h1>
        <form class="form-group" method="GET" action="{{url('registrar')}}">
            @csrf
            <div class="form-group"><h4 for="exampleInputEmail1">TIPO DE INSCRIPCIÓN :</h4></div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="tipoins" type="radio" id="inlineCheckbox1" value="Miembro Pleno" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Miembro Pleno</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="tipoins" type="radio" id="inlineCheckbox2" value="Corporativo">
                    <label class="form-check-label" for="inlineCheckbox2">Corporativo</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="tipoins" type="radio" id="inlineCheckbox3" value="Observador">
                    <label class="form-check-label" for="inlineCheckbox3">Observador</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="tipoins" type="radio" id="inlineCheckbox3" value="Estudiante">
                    <label class="form-check-label" for="inlineCheckbox3">Estudiante</label>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nombres:</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ingresar el nombre" maxlength="25" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="surname" class="col-sm-3 col-form-label">Apellidos:</label>
                <div class="col-sm-9">
                <input type="text" name="surname" class="form-control" id="surname" placeholder="Ingresar el apellido" maxlength="25" required> 
                </div>
            </div>


            <div class="form-group row">
                <label for="dni" class="col-sm-3 col-form-label">DNI:</label>
                <div class="col-sm-9">
                <input type="text" name="dni" class="form-control" id="dni" placeholder="Ingresar el DNI" maxlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                </div>
            </div>

            <div class="form-group row">
                <label for="dni" class="col-sm-3 col-form-label">E - Mail:</label>
                <div class="col-sm-9">
                <input type="email" name="email" class="form-control" id="email" placeholder="Ingresar el email" maxlength="50" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="dni" class="col-sm-3 col-form-label">Teléfono/Celular:</label>
                <div class="col-sm-9">
                <input type="text" name="tel" class="form-control" id="tel" placeholder="Ingresar el telefono o celular" maxlength="15" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="dni" class="col-sm-3 col-form-label">Domicilio:</label>
                <div class="col-sm-9">
                <input type="text" name="domic" class="form-control" id="tel" placeholder="Ingresar el domicilio" maxlength="50" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="dni" class="col-sm-3 col-form-label">Código Departamental:</label>
                    <div class="col-sm-9">
                        <select name="cdepart" id="inputState" class="form-control">
                            <option value="Amazonas" selected >Amazonas</option>
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
                <input type="text" name="cpc" class="form-control" id="tel" maxlength="25" placeholder="Ingresar CPC-CPCC-OTROS">
                </div>
            </div>

            <div class="form-group row">
                <label for="dni" class="col-sm-3 col-form-label">N° de Colegiatura:</label>
                <div class="col-sm-9">
                <input type="text" name="numcoleg" class="form-control" id="tel" maxlength="10" placeholder="Ingresar numero de colegiatura">
                </div>
            </div>

            <div class="form-group"><h4 for="exampleInputEmail1">MODALIDAD DE PAGO :</h4></div>
            <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" name="ModPago" type="radio" id="inlineCheckbox1" value="Efectivo" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Efectivo</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="ModPago" type="radio" id="inlineCheckbox2" value="Abono Cuenta">
                    <label class="form-check-label" for="inlineCheckbox2">Abono de Cuenta</label>
                </div>
            </div>
            <div class="form-group col-md-9">
                <label for="dni">Deposito/Cheque N°:</label>
                <input type="text" name="DepositoC" class="form-control" id="tel" maxlength="25" placeholder="Deposito o numero de cheque" required>
            </div>
            </div>

            <div class="form-group"><h4 for="exampleInputEmail1">COMPROBANTE A EMITIR :</h4></div>
            
            <div class="form row">
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input" name="ComprobanteE" type="radio" id="inlineCheckbox1" value="Factura" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Factura</label>
                </div>
                <div class="form-check">
                        <label class="form-check-label" for="inlineCheckbox2"></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="ComprobanteE" type="radio" id="inlineCheckbox2" value="Boleta">
                    <label class="form-check-label" for="inlineCheckbox2">Boleta de Venta</label>
                </div>
            </div>

            <div class="form-group col-md-9">
                    <div class="form-group row">
                            <label for="dni" class="col-sm-3 col-form-label">Razón Social:</label>
                            <div class="col-sm-9">
                            <input type="text" name="RazSoc" class="form-control" id="tel" maxlength="25" placeholder="Rázon Social" required>
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <label for="dni" class="col-sm-3 col-form-label">RUC:</label>
                            <div class="col-sm-9">
                            <input type="text" name="RUC" class="form-control" id="tel" maxlength="11" placeholder="Numero de RUC" required>
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <label for="dni" class="col-sm-3 col-form-label">Dirección:</label>
                            <div class="col-sm-9">
                            <input type="text" name="Direcc" class="form-control" id="tel" maxlength="50" placeholder="Deposito o numero de cheque" required>
                            </div>
                        </div>

            </div>

            
            </div>

            <div class="form-group row">
            <label for="dni" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <button type="submit" class="btn btn-primary">INSCRIBIR</button>
            </div>
            </div>
        </form>
        </div>
        
@endsection
