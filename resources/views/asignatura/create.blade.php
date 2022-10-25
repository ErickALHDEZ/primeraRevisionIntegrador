Formulario de creación de asignatura.


<form action="{{ url('/asignatura') }}" method="post" enctype="multipart/form-data">
@csrf
@include('asignatura.form');


</form>