<h1> {{ $modo }} asignatura</h1>


@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">

    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
    @endforeach
    </ul>
    </div>

    

@endif

<div class="form-group">
<label for="Clave"> Clave </label>
<input type="text" class="form-control" name="Clave"
value="{{ isset($asignatura->Clave)?$asignatura->Clave:old('Clave') }}" id="Clave" >
<br>
</div>

<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre"
value="{{ isset($asignatura->Nombre)?$asignatura->Nombre:old('Nombre') }}"  id="Nombre" >
<br>
</div>

<div class="form-group">
<label for="Cambio"> Cambio </label>
<input type="text" class="form-control" name="Cambio" 
value="{{ isset($asignatura->Cambio)?$asignatura->Cambio:old('Cambio') }}"  id="Cambio" >
<br>
</div>

<div class="form-group">
<label for="HorasTeoricas"> Horas Teoricas </label>
<input type="text" class="form-control" name="HorasTeoricas" 
value="{{ isset($asignatura->HorasTeoricas)?$asignatura->HorasTeoricas:old('HorasTeoricas') }}"  id="HorasTeoricas" >
<br>
</div>

<div class="form-group">
<label for="HorasPracticas"> Horas Practicas </label>
<input type="text" class="form-control" name="HorasPracticas" 
value="{{ isset($asignatura->HorasPracticas)?$asignatura->HorasPracticas:old('HorasPracticas') }}"  id="HorasPracticas" >
<br>
</div>

<div class="form-group">
<label for="Caracterizacion"> Caracterizacion </label>
<input type="text" class="form-control" name="Caracterizacion" 
value="{{ isset($asignatura->Caracterizacion)?$asignatura->Caracterizacion:old('Caracterizacion') }}"  id="Caracterizacion" >
<br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('asignatura/') }}"> Regresar</a>

<br>