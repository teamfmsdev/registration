<?php
    if(isset($_POST['forget_user'])){
    require 'PHPMailerAutoload.php';
    require 'credential.php';
                
    $mail = new PHPMailer;
                
    $mail->SMTPDebug = 4;                               // Enable verbose debug output
                
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
                        
    $mail->setFrom(EMAIL, 'Tuan Mohd Alif Naim');
    $mail->addAddress($_POST['email']);     // Add a recipient
    $mail->addReplyTo(EMAIL);
                        
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
                        
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '<div style="borger:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        }
    }
?>  