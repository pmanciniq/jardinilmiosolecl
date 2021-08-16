<?php
    header('Access-Control-Allow-Origin: http://jardinilmiosole.cl');
    use PHPMailer\PHPMailer\PHPMailer;

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if($name != null && $email != null && $subject != null && $message != null){
  		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  		{
        $isSuccess = false;
        $msg = 'Email incorrecto. Por favor revisa.';
      }
      else{

          require_once "PHPMailer/PHPMailer.php";
          require_once "PHPMailer/SMTP.php";
          require_once "PHPMailer/Exception.php";

          $mail = new PHPMailer;
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'mail.jardinilmiosole.cl';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'form@jardinilmiosole.cl';                 // SMTP username
          $mail->Password = '#JMK?6app[#l';                           // SMTP password
          $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 465;                                    // TCP port to connect to

          $mail->setFrom($email, $name);
          $mail->addAddress("contacto@jardinilmiosole.cl");     // Add a recipient
          $mail->addReplyTo($email, $name);

          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = $subject;
          $mail->Body = $message;

          if(!$mail->send()) {
              echo 'El mensaje no pudo ser enviado';
              echo 'ERROR: ' . $mail->ErrorInfo;
          } else {
              $isSuccess = true;
              $msg = 'Formulario enviado';
          }
      }
    }
    else{
        $isSuccess = false;
        $msg = 'Por favor completa todo el formulario. Ha ocurrido un error.';
    }
    $data = array(
        'isSuccess' => $isSuccess,
        'msg' => $msg
    );
    echo json_encode($data);
?>