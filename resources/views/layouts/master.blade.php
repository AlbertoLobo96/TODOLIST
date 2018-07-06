<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>TO-DO LIST</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
</head>

<body>
<div class="container">
    <p>Logged by
        <b>Alberto</b>
        <a href="" class="waves-effect waves-light btn">Logout</a>
    </p>

    <ul class="collapsible">
        <li>
            <div class="collapsible-header">
                <i class="material-icons">person_add</i>Invitaciones</div>
            <div class="collapsible-body">
                <p class="red-text">
                    <b>
                        Alberto
                    </b>
                    <a href="">Aceptar</a> |
                    <a href="">Rechazar</a>
                </p>

                <p class="red-text">
                    <b>
                        Jose
                    </b>
                    <a href="">Aceptar</a> |
                    <a href="">Rechazar</a>
                </p>

                <p class="red-text">
                    <b>
                        Jesus
                    </b>
                    <a href="">Aceptar</a> |
                    <a href="">Rechazar</a>
                </p>

                <p class="red-text">
                    <b>
                        Angela
                    </b>
                    <a href="">Aceptar</a> |
                    <a href="">Rechazar</a>
                </p>
            </div>
        </li>
    </ul>

    <h1 class="center-align green-text text-darken-4">TO-DO LIST</h1>

    @yield('content')
</div>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.collapsible').collapsible();
        $('select').formSelect();
    });
</script>
</body>

</html>