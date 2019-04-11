@extends('layouts.app')
@section('title','formulario')
@section('content')
    <div class="container" style="margin-top:50px">
        <h1>BUSCAR INSCRIPCION</h1>
        <form class="form-group" method="GET" action="{{url('buscar')}}">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">BUSCAR DNI:</label>
                    <div class="col-sm-9">
                        <input type="text" name="bdni" class="form-control" id="name" placeholder="Ingresar DNI" required maxlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>        
                </div>
                <div class="form-group row">
                    <label for="dni" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">BUSCAR</button>
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
                    <th>CPC</th>
                    <th>Numero de colegiatura</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach (session('buscar') as $b)
                <tr>
                        <td>{{$b->nombre}}</td>
                        <td>{{$b->apellido}}</td>
                        <td>{{$b->tipoi}}</td>
                        <td>{{$b->dni}}</td>
                        <td>{{$b->email}}</td>
                        <td>{{$b->celular}}</td>
                        <td>{{$b->domicilio}}</td>
                        <td>{{$b->codigodepart}}</td>
                        <td>{{$b->cpc}}</td>
                        <td>{{$b->numcolegiatura}}</td>
                        <td><a href="{{url("modificar/{$b->IdInscripcion}")}}">{{"Modificar"}}</a></td>
                        <td><a href="{{url("eliminar/{$b->IdInscripcion}")}}">{{"Eliminar"}}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        @endif
@endsection