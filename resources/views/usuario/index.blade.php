

@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-succes" role="alert">
{{ Session::get('Mensaje') }}
</div>


@endif

<a href="{{ url('usuario/create') }}" class="btn btn-success">Agregar Usuario</a>
<br/>
<br/>


<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th></th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nombre de Usuario</th>
            <th>Password</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($usuario as $usuario)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->nombre_usuario }}</td>
            <td>{{ $usuario->password }}</td>
            <td>{{ $usuario->email }}</td>
            <td>

            <a class="btn btn-success" href="{{ url('/usuario/'.$usuario->id. '/edit' ) }}">
            Editar
            </a>
            
            <form method="POST" action= "{{ url('/usuario/'.$usuario->id) }}" style="display:inline">
            {{csrf_field ()}}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrar?');">Borrar</button>
            
            </td>
        </tr>
    @endforeach
    </tbody>

</table>

</div>
@endsection
