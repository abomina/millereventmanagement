<?php 
  // variables php que reciben las claves de ajax
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  $to  = 'pedro.cotrina@cfcya.co'; 

  $subject = 'Formulario Monte Rizzo CFC';

  // message
	$message = '
	<h2>Acaba de llegar un correo electrónico diligenciado a través del formulario del proyecto Monte Rizzo CFC : </h2> <br>
	E-mail: '.$nombre.'<br>
	E-mail: '.$email.'<br>
	Mensaje: '.$mensaje.'<br>';

	error_log($message);

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Mail it
	$estado = mail($to, $subject, $message, $headers);

	echo $estado;
?>