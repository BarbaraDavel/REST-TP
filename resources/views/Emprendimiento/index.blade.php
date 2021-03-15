Mis emprendimientos

@extends('layouts.app')

@section('content')

<div class="container" >

@if(Session::has('Mensaje'))

<div class="alert alert-succes" role="alert">
{{ Session::get('Mensaje') }}
</div>


@endif

<a href="{{ url('emprendimiento/create') }}" class="btn btn-success">Agregar Emprendimiento</a>
<br/>
<br/>


<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th></th>
            <th>Nombre Emprendimiento</th>
            <th>Descripción</th>
            <th>Logo</th>
            <th>Instagram</th>
            <th>Facebook</th>
            <th>Pagina Web</th>
            <th>Nro de teléfono</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($emprendimiento as $emprendimiento)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $emprendimiento->nombre }}</td>
            <td>{{ $emprendimiento->descripcion }}</td>
            <td>{{ $emprendimiento->logo }}</td>
            <td>{{ $emprendimiento->instagram }}</td>
            <td>{{ $emprendimiento->facebook }}</td>
            <td>{{ $emprendimiento->sitio_web }}</td>
            <td>{{ $emprendimiento->nro_telefono }}</td>
            <td>{{ $emprendimiento->calle }}</td>
            <td>{{ $emprendimiento->calle_numero }}</td>
            <td>

            <a class="btn btn-success" href="{{ url('/emprendimiento/'.$emprendimiento->id. '/edit' ) }}">
            Editar
            </a>
            
            <form method="POST" action= "{{ url('/emprendimiento/'.$emprendimiento->id) }}" style="display:inline">
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

