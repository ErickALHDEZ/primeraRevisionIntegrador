@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/asignatura/'.$asignatura->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('asignatura.form',['modo'=>'Editar'] );

</form>
</div>
@endsection
