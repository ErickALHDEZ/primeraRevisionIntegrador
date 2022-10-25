<label for="Clave"> Clave </label>
<input type="text" name="Clave" value="{{ isset($asignatura->Clave)?$asignatura->Clave:'' }}" id="Clave" >
<br>

<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($asignatura->Nombre)?$asignatura->Nombre:'' }}"  id="Nombre" >
<br>

<label for="Cambio"> Cambio </label>
<input type="text" name="Cambio" value="{{ isset($asignatura->Cambio)?$asignatura->Cambio:'' }}"  id="Cambio" >
<br>

<label for="HorasTeoricas"> Horas Teoricas </label>
<input type="text" name="HorasTeoricas" value="{{ isset($asignatura->HorasTeoricas)?$asignatura->HorasTeoricas:'' }}"  id="HorasTeoricas" >
<br>

<label for="HorasPracticas"> Horas Practicas </label>
<input type="text" name="HorasPracticas" value="{{ isset($asignatura->HorasPracticas)?$asignatura->HorasPracticas:'' }}"  id="HorasPracticas" >
<br>

<label for="Caracterizacion"> Caracterizacion </label>
<input type="text" name="Caracterizacion" value="{{ isset($asignatura->Caracterizacion)?$asignatura->Caracterizacion:'' }}"  id="Caracterizacion" >
<br>

<input type="submit" value="Guardar datos">
<br>