<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function enviar_correo($to, $name, $attach)
{
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        //$mail->SMTPDebug = 3;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.upgrade.com.pe';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ecommerce@upgrade.com.pe';                 // SMTP username
        $mail->Password = 'upgrade';                           // SMTP password
        // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('ecommerce@upgrade.com.pe', 'Upgrade');
        $mail->addAddress($to);               // Name is optional
        $mail->addAddress('john.mestas@upgrade.com.pe');
        $mail->addAddress('john.mestas@upgrade.com.pe');
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->addStringAttachment($attach, 'Reclamo.pdf');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'RECLAMO UPGRADE';
        $mail->Body    = '<h3>Su reclamo ha sido recibido</h3>';
        $mail->AltBody = '<h4>En breve nos pondremos en contacto con Ud.</h4>';
        $mail->send();

        echo '<div class="p-3 mb-2 bg-success text-white"><center>SU RECLAMO HA SIDO RECIBIDO<center></div>';

        echo '<script type="text/javascript">',
            'alert("Se envio a su correo un copia del reclamo");',
            '</script>';

    } catch (Exception $e) {
        echo '<div class="p-3 mb-2 bg-danger text-white">A OCURRIDO UN ERROR!</div>';
        echo 'El correo no puedo ser enviado: ', $mail->ErrorInfo;
    }
    // return array_sum($enteros);
}

?>
