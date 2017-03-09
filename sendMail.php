<?php
require_once('PHPMailer/class.phpmailer.php');
$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$name = $request->name;
@$email = $request->email;
@$company = $request->company;
@$message = $request->message;

$correo->SetFrom($email, "");

//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo($_POST["correo"],"");
 
//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("juanescobar.90@gmail.com", "Robot");
 
//Ponemos el asunto del mensaje
$correo->Subject = "Contacto";
$messages = '
	<h2>Just sent an email with the form Contact Our Company</h2> <br>
	Name: '.$name.'<br>
	Email: '.$email.'<br>
	Company: '.$company.'<br>
	Message: '.$message.'<br>';

$correo->MsgHTML($messages);
 
//Si deseamos agregar un archivo adjunto utilizamos AddAttachment
//$correo->AddAttachment("images/phpmailer.gif");
 
//Enviamos el correo
if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;
} else {
  echo "<b>Mensaje enviado con exito. <br>Espera nuestra respuesta.</b>";
}

?>