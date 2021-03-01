
@extends('layouts.app')

@section('content')

<div class="container">

<form method="POST" action="{{ url('/usuario/'.$usuario->id) }}" enctype="multipart/form-data">
{{csrf_field()}}
{{ method_field('PATCH') }} 

@include('usuario.form',['Modo' => 'editar'])
  
</form>
</div>
@endsection