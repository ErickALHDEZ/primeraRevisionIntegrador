@extends('layouts.app')
@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif


<a href="{{ url('asignatura/create') }}" class="btn btn-success"> Registrar nueva asignatura</a>
<br/>
<br/>

<table class ="table table-light">

    <thead class ="thead-light">
        <tr>
            <th>#</th>
            <th>Clave</th>
            <th>Nombre</th>
            <th>Cambio</th>
            <th>Horas Teoricas</th>
            <th>Horas Practicas</th>
            <th>Caracterizacion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($asignaturas as $asignatura)
        <tr>
            <td>{{ $asignatura->id }}</td>
            <td>{{ $asignatura->Clave }}</td>
            <td>{{ $asignatura->Nombre }}</td>
            <td>{{ $asignatura->Cambio }}</td>
            <td>{{ $asignatura->HorasTeoricas }}</td>
            <td>{{ $asignatura->HorasPracticas }}</td>
            <td>{{ $asignatura->Caracterizacion }}</td>
            <td>
                
            <a href="{{ url('/asignatura/'.$asignatura->id.'/edit') }}" class="btn btn-warning">
                Editar
            </a>
             | 

            <form action="{{ url('/asignatura/'.$asignatura->id) }}"class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrar el registro?')"
             value="Borrar">

            </form>

             </td>
        </tr>
        @endforeach

    </tbody>

</table>
</div>
@endsection