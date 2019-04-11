@extends('layouts.app')
@section('scr')   
@endsection
@section('title','formulario')
@section('content')
    <div class="container" style="margin-top:50px">
        <h1>MODIFICAR INSCRIPCION</h1>
        <div class="alert alert-info" role="alert">
            Se puede realizar la busqueda del participante por el DNI ó ID de inscripcion.
        </div>
        <form class="form-group" method="GET" action="{{url('BuscarDni')}}">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">BUSCAR POR DNI:</label>
                    <div class="col-sm-9">
                        <input type="text" name="bdni" class="form-control" id="name" placeholder="Ingresar DNI" maxlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>        
                </div>
                
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">BUSCAR DNI</button>
                        </div>
                </div>
        </form>
        <form class="form-group" method="GET" action="{{url('BuscarId')}}">
                <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">BUSCAR POR ID DE INSCRIPCION:</label>
                        <div class="col-sm-9">
                            <input type="text" name="bid" class="form-control" id="name" placeholder="Ingresar Id de inscripcion" maxlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                        </div>        
                </div>
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">BUSCAR ID</button>
                        </div>
                </div>
        </form>
        @if(session('msg'))
        <div class="alert alert-warning" role="alert">
            {{session('msg')}}
        </div>
        @else
        @if(session('buscar'))
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo de inscripcion</th>
                    <th>DNI</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Domicilio</th>
                    <th>Codigo de departamento</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach (session('buscar') as $b)
                <tr>
                        <td>{{$b->nombre}}</td>
                        <td>{{$b->apellido}}</td>
                        <td>{{$b->Tinsc}}</td>
                        <td>{{$b->dni}}</td>
                        <td>{{$b->email}}</td>
                        <td>{{$b->celular}}</td>
                        <td>{{$b->domicilio}}</td>
                        <td>{{$b->CodDepart}}</td>
                        <td><a href="{{url("modificar/{$b->IdInscripcion}")}}">{{"Modificar"}}</a></td>
                        <td><a href="{{url("eliminar/{$b->IdInscripcion}")}}">{{"Eliminar"}}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        @endif
@endsection