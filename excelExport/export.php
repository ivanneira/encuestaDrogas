<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 01/11/2017
 * Time: 09:28 AM
 */
require_once("../db/class.conexion.php");
require_once "traductores.php";

//https://github.com/elidickinson/php-export-data
require_once("../excelExport/php-export-data.class.php");



$exporter = new ExportDataExcel('browser', 'test.xls');

$exporter->initialize(); // starts streaming data to web browser

$exporter->addRow(array(
    "Numero de cuestionario",
    "Departamento",
    "Localidad",
    "Escuela",
    "Edad",
    "Sexo",
    "Pregunta 1",
    "Pregunta 2",
    "Pregunta 3 Alcohol",
    "Pregunta 3 Drogas",
    "Pregunta 4 Alcohol",
    "Pregunta 4 Drogas",
    "Pregunta 5 Alcohol",
    "Pregunta 5 Drogas",
    "Pregunta 6 Alcohol",
    "Pregunta 6 Drogas"
    ));


$db = new MYSQL();

$result = $db->Consulta("SELECT * FROM encuestaCAGE");

$valores = array();

while($row = $db->fetch_array($result) ){


    //array_push($valores,$row);

    $exporter->addRow(array(
        $row['numeroCuestionario'],
        traductorDepartamento($row['departamento']),
        traductorLocalidad($row['localidad']),
        traductorEscuela($row['escuela']),
        $row['edad'],
        traductorSexo($row['sexo']),
        traductorSwitch($row['r1']),
        traductorSwitch($row['r2']),
        traductorSwitch($row['r3A']),
        traductorSwitch($row['r3D']),
        traductorSwitch($row['r4A']),
        traductorSwitch($row['r4D']),
        traductorSwitch($row['r5A']),
        traductorSwitch($row['r5D']),
        traductorSwitch($row['r6A']),
        traductorSwitch($row['r6D'])

    ));
}





$exporter->finalize(); // writes the footer, flushes remaining data to browser.

exit(); // all done
