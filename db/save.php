<?php

	require_once("class.conexion.php");


	$db = new MYSQL();


		$numeroCuestionario = $_POST['numeroCuestionario'];
		$departamento = $_POST['departamento'];
		$localidad = $_POST['localidad'];
		$escuela = $_POST['escuela'];
		$edad = $_POST['edad'];
		$sexo = $_POST['sexo'];
		$r1 = $_POST['r1'];
		$r2 = $_POST['r2'];
		$r3A = $_POST['r3A'];
		$r3D = $_POST['r3D'];
		$r4A = $_POST['r4A'];
		$r4D = $_POST['r4D'];
		$r5A = $_POST['r5A'];
		$r5D = $_POST['r5D'];
		$r6A = $_POST['r6A'];
		$r6D = $_POST['r6D'];


	$query = $db->Consulta("insert into encuestaCAGE (numeroCuestionario,departamento, localidad,escuela, edad,sexo,r1,r2,r3A,r3D,r4A,r4D,r5A,r5D,r6A,r6D) values ('$numeroCuestionario','$departamento','$localidad','$escuela','$edad','$sexo','$r1','$r2','$r3A','$r3D','$r4A','$r4D','$r5A','$r5D','$r6A','$r6D')");


	$mensaje = "La solicitud no pudo ser enviada.";
    $estado = "false";

    if(!$query)
    {
        $mensaje = "Procesado correctamente.";
        $estado = "true";

    }
    else
    {
        $mensaje = "Error: ".$query;
    }

    $response = array(
        'mensaje' => $mensaje,
        'estado' => $estado,
    );

    echo json_encode($response);

?>