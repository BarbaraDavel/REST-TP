
@extends('layouts.app')

@section('content')

<div class="container">

<form method="POST" action="{{ url('/emprendimiento/'.$emprendimiento->id) }}" enctype="multipart/form-data">
{{csrf_field()}}
{{ method_field('PATCH') }} 

@include('emprendimiento.form',['Modo' => 'editar'])
  
</form>
</div>
@endsection