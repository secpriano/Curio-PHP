<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader and load all required php files
require __DIR__.'../../vendor/autoload.php';

/*
*
* How the function works:
* The function will send the user an email with html support, the mail will be send from daanisaanwezigdev@gmail.com for now, this can be changed later

* The variables:
* $mailAdress - you should put the mail adress of the person you want to send the mail to here
* $userName - this should be the name of the person the mail will be send to
* $subject - this is the title of the mail
* $mailBody - This should be the content of the mail, you can use html here if you wish to
* $altMailBody - this will be used in case the normal mail body can not be loaded, this should be in a plain text format
* $attachment - this is optional and can be left empty, this will add a file or image to the mail as an attachment
*/

function SendMail($mailAdress, $userName, $subject, $mailBody, $altMailBody, $attachment)
{

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                          // Enable verbose debug output
        $mail->isSMTP();                                                // Send using SMTP
        $mail->Host       = 'smtp.ziggo.nl';                            // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                       // Enable SMTP authentication
        $mail->Username   = 'curiotest@ziggo.nl';                       // SMTP username
        $mail->Password   = '3XVuL4m:$TDvXn*';                          // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                        // TCP port to connect to

        //Recipients
        $mail->setFrom('curiotest@ziggo.nl', 'Bioscoop AMO');
        $mail->addAddress($mailAdress, $userName);                      // Add a recipient
        //$mail->addAddress('ellen@example.com');                       // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        if(isset($attachment))
        {
            $mail->addAttachment($attachment);                          //add a attachment to the mail
            //$mail->addAttachment('/var/tmp/file.tar.gz');             // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');            // Optional name
        }

        // Content
        $mail->isHTML(true);                                            // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "$mailBody";
        $mail->AltBody = "$altMailBody";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

?>

<!-- php mailer (library) -->

<!-- mailtrap.io (free smtp server) -->
