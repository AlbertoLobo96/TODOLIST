@extends('layouts.master')
@section('content')
<form class="container col s12">
    <div class="row">
        <div class="input-field col s12">
            <input id="ETarea" type="text" class="validate">
            <label for="ETarea">Editar Tarea</label>
        </div>

        <div class="input-field col s12">
            <select>
                <option value="" disabled selected>Elija la Tarea</option>
                <option value="1">Crear Base de datos</option>
                <option value="2">Realizar FrontEnd</option>
                <option value="3">Realizar BackEnd</option>
                <option value="4">Realizar SEO</option>
                <option value="5">Consultar Cliente</option>
            </select>
            <label>Asignar a:</label>
        </div>
    </div>
    <a href="" class="waves-effect waves-light btn">Editar Tarea</a>
</form>
@endsection