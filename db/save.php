<?php

	require_once("class.conexion.php");


	$db = new MYSQL();

	/*
		Array
		(
		    [cs] => Otros
		    [ape] => AASD
		    [nom] => ASDASD
		    [tel] => 123123
		    [dir] => A@A.COM
		    [mot] => Personal
		    [det] => ASD
		)
	*/

/*
		$cs = $_POST['cs'];
		$ape = $_POST['ape'];
		$nom = $_POST['nom'];
		$tel = $_POST['tel'];
		$dir = $_POST['dir'];
		$mot = $_POST['mot'];
		$det = $_POST['det'];
*/

		var_dump($_POST);

	die;
	$query = $db->Consulta("insert into peticiones (cs,ape, nom,tel, dir,mot,det) values ('$cs','$ape','$nom','$tel','$dir','$mot','$det')");
	//$query = $db->Consulta("insert into encuestaCAGE (numeroCuestionario,departamento, localidad,escuela, edad,sexo,r1,r2,) values ('$cs','$ape','$nom','$tel','$dir','$mot','$det')");


	$mensaje = "La solicitud no pudo ser enviada.";
    $estado = "false";

    if(!$query)
    {
        $mensaje = "Procesado correctamente. Nº: ". $db->getLastID(). " un nos pondremos en contacto con ud.";
        $estado = "true";

        $to = $dir;
		$subject = "Solicitud de Permisos de Red";
		$txt = "Se ha enviado la solicitud Nº: ".$db->getLastID(). " será evaluado y en breve nos pondremos en contacto con ud.";
		$headers = "From: msp@salud.sanjuan.gob.ar" . "\r\n" .
		"CC: j.recioleguizamon@gmail.com";

		mail($to,$subject,$txt,$headers);
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