@extends('layouts.master')
@section('content')

    <table class="responsive-table">
        <thead>
        <tr>
            <th>Tarea</th>
            @if (Auth::user()->is_admin == 1)
            <th>Responsable</th>
            @endif
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Crear Base de datos</td>
            @if (Auth::user()->is_admin == 1)
            <td>Jesus</td>
            @endif
            <td>
                <a title="Editar" href="">
                    <i class="material-icons green-text">edit</i>
                </a>
            </td>
            <td>
                <a title="Borrar" href="">
                    <i class="material-icons red-text">delete</i>
                </a>
            </td>
        </tr>

        <tr>
            <td>Realizar FrontEnd</td>
            @if (Auth::user()->is_admin == 1)
            <td>Alberto</td>
            @endif
            <td>
                <a title="Editar" href="">
                    <i class="material-icons green-text">edit</i>
                </a>
            </td>
            <td>
                <a title="Borrar" href="">
                    <i class="material-icons red-text">delete</i>
                </a>
            </td>
        </tr>

        <tr>
            <td>Realizar BackEnd</td>
            @if (Auth::user()->is_admin == 1)
            <td>Jose</td>
            @endif
            <td>
                <a title="Editar" href="">
                    <i class="material-icons green-text">edit</i>
                </a>
            </td>
            <td>
                <a title="Borrar" href="">
                    <i class="material-icons red-text">delete</i>
                </a>
            </td>
        </tr>

        <tr>
            <td>Realizar SEO</td>
            @if (Auth::user()->is_admin == 1)
            <td>Angela</td>
            @endif
            <td>
                <a title="Editar" href="">
                    <i class="material-icons green-text">edit</i>
                </a>
            </td>
            <td>
                <a title="Borrar" href="">
                    <i class="material-icons red-text">delete</i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>

    <ul class="pagination center-align">
        <li class="disabled">
            <a href="#!">
                <i class="material-icons">chevron_left</i>
            </a>
        </li>
        <li class="active">
            <a href="#!">1</a>
        </li>
        <li class="waves-effect">
            <a href="#!">2</a>
        </li>
        <li class="waves-effect">
            <a href="#!">3</a>
        </li>
        <li class="waves-effect">
            <a href="#!">4</a>
        </li>
        <li class="waves-effect">
            <a href="#!">5</a>
        </li>
        <li class="waves-effect">
            <a href="#!">
                <i class="material-icons">chevron_right</i>
            </a>
        </li>
    </ul>

    <form class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input id="ATarea" type="text" class="validate">
                <label for="ATarea">Nueva Tarea</label>
            </div>
                @include('partials.empleados')
            <a href="" class="waves-effect waves-light btn">Añadir Nueva Tarea</a>
        </div>
    </form>
    @if (Auth::user()->is_admin == 0)
    <form action="" class="col s12">
        <div class="input-field col s12">
            <select>
                <option value="" disabled selected>Enviar invitación a:</option>
                <option value="1">admin1</option>
                <option value="2">admin1</option>
                <option value="3">admin1</option>
            </select>
            <label>Asignar a:</label>
            <a href="" class="waves-effect waves-light btn">Enviar Invitación</a>
        </div>
    </form>
    @endif
    @if (Auth::user()->is_admin == 1)
    <ul class="collection with-header">
        <li class="collection-header"><h4>Empleados</h4></li>
        <li class="collection-item">
            <div>Alberto<a href="#!" class="secondary-content"><i class="material-icons red-text">delete</i></a></div>
        </li>
        <li class="collection-item">
            <div>Jose<a href="#!" class="secondary-content"><i class="material-icons red-text">delete</i></a></div>
        </li>
        <li class="collection-item">
            <div>Jesus<a href="#!" class="secondary-content"><i class="material-icons red-text">delete</i></a></div>
        </li>
        <li class="collection-item">
            <div>Angela<a href="#!" class="secondary-content"><i class="material-icons red-text">delete</i></a></div>
        </li>
    </ul>
    @endif
@endsection