
<div class="form-group">
<label for="nombre" class="control-label">{{'Nombre'}} </label>
<input type="text" class="form-control {{ $errors->has ('nombre')?'is-invalid':'' }}" name="nombre" id="nombre" 
value="{{ isset ($usuario->nombre)?$usuario->nombre:old('nombre') }}">

{!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="apellido" class="control-label">{{'Apellido'}} </label>
<input type="text" class="form-control {{ $errors->has ('apellido')?'is-invalid':'' }}" name="apellido" id="apellido" 
value="{{ isset ($usuario->apellido)?$usuario->apellido:old('apellido') }}">

{!! $errors->first('apellido','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="nombre_usuario" class="control-label">{{'Nombre de Usuario'}} </label>
<input type="text" class="form-control {{ $errors->has ('nombre de usuario')?'is-invalid':'' }}" name="nombre_usuario" id="nombre_usuario" 
value="{{ isset ($usuario->nombre_usuario)?$usuario->nombre_usuario:old('nombre_usuario') }}">

{!! $errors->first('nombre de usuario','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="email" class="control-label">{{'Email'}} </label>
<input type="email" class="form-control {{ $errors->has ('email')?'is-invalid':'' }}"name="email" id="email"
value="{{ isset ($usuario->email)?$usuario->email:old('email') }}"> 

{!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="password" class="control-label">{{'Password'}} </label>
<input type="password" class="form-control {{ $errors->has ('password')?'is-invalid':'' }}"name="password" id="password" 
value="{{ isset ($usuario->password)?$usuario->password:old('password') }}">

{!! $errors->first('password','<div class="invalid-feedback">:message</div>') !!}

</div>

<div>
  <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> Acepto los Términos y Condiciones
</div>

</br>

<input class="btn btn-success" type="submit" value="{{ $Modo == 'crear' ? 'Crear Cuenta':'Editar' }}">

<a class="btn btn-primary" href="{{ url('usuario') }}">Volver</a>
</br>