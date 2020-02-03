<?php
    if(isset($_POST['submit'])){
        require "PHPMailerAutoload.php";
        require "crediantial.php";
        $mail = new PHPMailer;
        // print_r(email);
        // print_r(pass);
        //$mail->SMTPDebug = 2;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = email;                 // SMTP username
        $mail->Password = pass;                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->CharSet = "UTF-8";
        $mail->setFrom(email, 'Thanks for your submission');
        $mail->addAddress($_POST['email']);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo(email, 'Reply from client');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'THANK YOU MAIL';
        $mail->Body    = 'Thank you for your submission.';
        $mail->AltBody = '';

        if(!$mail->send()) {
            echo '<h1>SORRY!! SUBMISSION IS NOT PROCESSED</H1>';
            echo $mail->ErrorInfo;
        } else {
            echo "<h1>Thank You!! Your submission is accepted</h1>";
            }
    }

?>