@extends('layouts.app')
@section('title','formulario')
@section('content')
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Exito!</h4>
    <p>
       {{session('msg')}} 
    </p>
</div>
@endsection