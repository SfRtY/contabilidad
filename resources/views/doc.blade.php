@extends('layouts.app')
@section('title','formulario')
@section('content')
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Exito!</h4>
    <p>
       {{session('msg')}} 
    </p>
    @foreach (session('id') as $b)
        <form class="form-group" method="POST" action="{{url("doc/{$b}")}}">
    @endforeach
            @csrf
        <div class="form-group row">
            <div class="col-sm-9">
                <button type="submit" class="btn btn-primary">IMPRIMIR</button>
            </div>
            </div>
    </form>
</div>
@endsection