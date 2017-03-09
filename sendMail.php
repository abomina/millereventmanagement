<?php
require_once('PHPMailer/class.phpmailer.php');

$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()
//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom("juanescobar.90@gmail.com", "");
 
//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo("juanescobar.90@gmail.com","");
 
//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("desarrollo@studentshouse.com.co", "Robot");
 
//Ponemos el asunto del mensaje
$correo->Subject = "Contacto";

/*
 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
 * $correo->IsHTML(false);
 * $correo->Body = "Mi mensaje en Texto Plano";
 */

$correo->MsgHTML("asdasdasd");
 
//Si deseamos agregar un archivo adjunto utilizamos AddAttachment
//$correo->AddAttachment("images/phpmailer.gif");
 
//Enviamos el correo
if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;
} else {
  echo "<b>Mensaje enviado con exito. <br>Espera nuestra respuesta.</b>";
}
?>