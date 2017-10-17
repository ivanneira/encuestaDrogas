<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 17/10/2017
 * Time: 09:53 AM
 */
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta de Drogas</title>

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="style.css">


</head>
<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-md">

            <h4>Respuestas:</h4>

        </div>
    </div>

    <div class="row">

        <form id="frm_data" name="frm_data" action="" class="form-horizontal" onsubmit="return false;">

            <div class="tarjeta">

                <h5>Numero de cuestionario:</h5>

                <input type="number" class="form-control">

            </div>

            <div class="tarjeta">

                <h5>Edad:</h5>

                <input type="number" class="form-control">

            </div>

            <div class="tarjeta">

                <h5>Departamento:</h5>

                <select required id="ddDepartamento" name="ddDepartamento" class="selectpicker" data-live-search="true" title="Seleccione un departamento...">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>

                <h5>Localidad:</h5>

                <select required id="ddDepartamento" name="ddDepartamento" class="selectpicker" data-live-search="true" title="Seleccione un localidad...">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>

            </div>

            <div class="tarjeta">

                <h5>Sexo:</h5>

                <div class="form-check">
                    <label class="form-check-label">
                        <span class="badge">Femenino</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                        <span class="badge">Masculino</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >

                    </label>
                </div>

            </div>

            <div class="tarjeta">

                <h5>¿Alguna vez consumió bebidas alcoholicas?</h5>

                <div class="form-check">
                    <label class="form-check-label">
                        <span class="badge">SI</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                        <span class="badge">NO</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >

                    </label>
                </div>

            </div>

            <div class="tarjeta">

                <h5>¿Alguna vez consumió drogas?</h5>

                <div class="form-check">
                    <label class="form-check-label">
                        <span class="badge">SI</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios1" value="option1" >
                        <span class="badge">NO</span>
                        <input class="form-check-input" type="radio" name="cosoSI" id="exampleRadios2" value="option2" >

                        <br>

                        <h5>¿Cuáles?</h5>

                        <select required id="ddDepartamento" name="ddDepartamento" class="selectpicker" data-live-search="true" title="Seleccione un departamento...">
                            <option>Faso</option>
                            <option>Merca</option>
                            <option>Palitos de la selva</option>
                        </select>

                    </label>
                </div>

            </div>

            <div class="text-center">
                <button type="submit" onclick="javascript:enviarDatos();" class="btn btn-default">Enviar solicitud</button>
            </div>

        </form>
    </div>


</div>



</body>


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!--user script-->
<script src="script.js"></script>
</html>
