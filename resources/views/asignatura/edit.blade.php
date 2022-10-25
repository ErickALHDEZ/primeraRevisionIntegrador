Formulario de edición de empleado

<form action="{{ url('/asignatura/'.$asignatura->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('asignatura.form');

</form>
