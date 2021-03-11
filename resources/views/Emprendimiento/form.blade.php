
<div class="form-group">
<label for="nombre" class="control-label">{{'Nombre Emprendimiento'}} </label>
<input type="text" class="form-control {{ $errors->has ('nombre')?'is-invalid':'' }}" name="nombre" id="nombre" 
value="{{ isset ($emprendimiento->nombre)?$emprendimiento->nombre:old('nombre') }}">

{!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="descripcion" class="control-label">{{'Descripción'}} </label>
<input type="text" class="form-control {{ $errors->has ('descripcion')?'is-invalid':'' }}" name="descripcion" id="descripcion" 
value="{{ isset ($emprendimiento->descripcion)?$emprendimiento->descripcion:old('descripcion') }}">

{!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="logo" class="control-label">{{'Logo'}} </label>
<input type="text" class="form-control {{ $errors->has ('logo')?'is-invalid':'' }}" name="logo" id="logo" 
value="{{ isset ($emprendimiento->logo)?$emprendimiento->logo:old('logo') }}">

{!! $errors->first('logo','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="instagram" class="control-label">{{'Instagram'}} </label>
<input type="instagram" class="form-control {{ $errors->has ('instagram')?'is-invalid':'' }}"name="instagram" id="instagram"
value="{{ isset ($emprendimiento->instagram)?$emprendimiento->instagram:old('instagram') }}"> 

{!! $errors->first('instagram','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="facebook" class="control-label">{{'Facebook'}} </label>
<input type="facebook" class="form-control {{ $errors->has ('facebook')?'is-invalid':'' }}"name="facebook" id="facebook" 
value="{{ isset ($emprendimiento->facebook)?$emprendimiento->facebook:old('facebook') }}">

{!! $errors->first('facebook','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="sitio_web" class="control-label">{{'Pagina Web'}} </label>
<input type="sitio_web" class="form-control {{ $errors->has ('sitio_web')?'is-invalid':'' }}"name="sitio_web" id="sitio_web" 
value="{{ isset ($emprendimiento->sitio_web)?$emprendimiento->sitio_web:old('sitio_web') }}">

{!! $errors->first('sitio_web','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="nro_telefono" class="control-label">{{'Nro de teléfono'}} </label>
<input type="nro_telefono" class="form-control {{ $errors->has ('nro_telefono')?'is-invalid':'' }}"name="nro_telefono" id="nro_telefono" 
value="{{ isset ($emprendimiento->nro_telefono)?$emprendimiento->nro_telefono:old('nro_telefono') }}">

{!! $errors->first('nro_telefono','<div class="invalid-feedback">:message</div>') !!}

</div>
<div class="form-group">
<label for="calle" class="control-label">{{'Calle'}} </label>
<input type="calle" class="form-control {{ $errors->has ('calle')?'is-invalid':'' }}"name="calle" id="calle" 
value="{{ isset ($emprendimiento->calle)?$emprendimiento->calle:old('calle') }}">

{!! $errors->first('calle','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="calle_numero" class="control-label">{{'Calle Numero'}} </label>
<input type="calle_numero" class="form-control {{ $errors->has ('calle_numero')?'is-invalid':'' }}"name="calle_numero" id="calle_numero" 
value="{{ isset ($emprendimiento->calle_numero)?$emprendimiento->calle_numero:old('calle_numero') }}">

{!! $errors->first('calle','<div class="invalid-feedback">:message</div>') !!}

</div>

</br>

<input class="btn btn-success" type="submit" value="{{ $Modo == 'crear' ? 'Agregar':'Editar' }}">

<a class="btn btn-primary" href="{{ url('emprendimiento') }}">Volver</a>
</br>