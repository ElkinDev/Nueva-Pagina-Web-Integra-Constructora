<?php

  
  require './libs/PHPMailer/src/PHPMailer.php';
  require './libs/PHPMailer/src/SMTP.php';

  $to = 'integragerenciayconstruccion@gmail.com';
  $nombre = $_POST["nombre"];
  $telefono = $_POST["telefono"];
  $email= $_POST["email"];
  $ciudad= $_POST["ciudad"];
  $asunto= $_POST["asunto"];
  $correoProyecto= $_POST["correoProyecto"];
  $menssaje= $_POST["mensaje"];

  $message ='<table style="width:100%">
      <tr>
          <td>'.$nombre.'</td>
      </tr>
      <tr><td>Correo electrónico: '.$email.'</td></tr>
      <tr><td>Teléfono de contacto: '.$phone.'</td></tr>
      <tr><td>Ciudad: '.$ciudad.'</td></tr>
      <tr><td>Asunto: '.$asunto.'</td></tr>
      <tr><td>Mensaje: '.$menssaje.'</td></tr>
      
  </table>';
  $mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'sco8.hostdime.com.co';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'admin@integraconstructora.com.co';                 // SMTP username
    $mail->Password = 'FJi+l2]Tvrzj';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
        //Recipients
        $mail->addAddress('integragerenciayconstruccion@gmail.com');     // Add a recipient
        $mail->addReplyTo('integragerenciayconstruccion@gmail.com', utf8_decode('Información'));



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject ='Contacto Pagina Web - '.$asunto;
    $mail->Body = $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'SUCCESS';
} catch (Exception $e) {
    echo 'ERROR', $mail->ErrorInfo;
}



?>
