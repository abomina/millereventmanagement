<?php 

  $to  = 'desarrollo@studentshouse.com.co'; 

  $subject = 'Formulario Monte Rizzo CFC';

  // message
	$message = '
	<h2>Acaba de llegar un correo electrónico diligenciado a través del formulario del proyecto Monte Rizzo CFC :';

	error_log($message);

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Mail it
	$estado = mail($to, $subject, $message, $headers);

	echo $estado;
?>