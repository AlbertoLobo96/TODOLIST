@extends('layouts.master')
@section('content')
<form class="col s12">
    <div class="row">
        <div class="input-field col s12">
            <input id="ETarea" type="text" class="validate">
            <label for="ETarea">Editar Tarea</label>
        </div>

        @include('partials.empleados')
    </div>
    <a href="" class="waves-effect waves-light btn">Editar Tarea</a>
</form>
@endsection