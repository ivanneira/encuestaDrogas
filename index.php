<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 19/10/2017
 * Time: 08:05 AM
 */
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta CAGE</title>

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap-select/dist/css/bootstrap-select.min.css">
    <!--User Style-->
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12  center-block">
                <h3 class="">Encuesta CAGE</h3>
            </div>
        </div>

        <div class="tarjetaPrincipal">



            <div class="row">

                    <div class="col-md-6">

                            <input required="true" type="number" class="form-control" id="numeroCuestionario" tabindex="1" placeholder="Cuestionario Nº">


                    </div>
                    <div class="col-md-6">


                        <input required="text" type="number" class="form-control" id="numeroCuestionario" tabindex="2" placeholder="Escuela">

                    </div>
            </div>

            <br>

            <div class="row">

                <div class="col-md-6">

                    <input required="true" type="text" class="form-control" id="numeroCuestionario" tabindex="3" placeholder="Departamento">


                </div>

                <div class="col-md-6">


                    <input required="text" type="text" class="form-control" id="numeroCuestionario" tabindex="4" placeholder="Localidad">

                </div>
            </div>

        </div>

        <br>

        <div class="preguntas">

            <!--Contenido dinámico-->

        </div>
    </div>

</body>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!--user script-->
<script src="main.js"></script>

</html>
