<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>FICHA DE INSCRIPCION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                </tr>
                
                @foreach($lista as $ls)
                <tr>
                    <td>{{$ls->nombre}}</td>
                    <td>{{$ls->apellido}}</td>
                    <td>{{$ls->dni}}</td>
                </tr>
                @endforeach
            </table>    
</div>    

</body>
</html>