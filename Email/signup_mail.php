<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hopedropsbloodbank@gmail.com';                 // SMTP username
    $mail->Password = 'hopedrops123';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('hopedropsbloodbank@gmail.com', 'Hope Drops');
    $mail->addAddress($email, $fname);     // Add a recipient
    $mail->addReplyTo('hopedropsbloodbank@gmail.com', 'Hope Drops');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome, reset your password for Hope Drops.';

    $variables = array();

    $variables['name'] = $fname;
    $variables['password'] = $pass;
    $variables['email'] = $email;

    $template = file_get_contents("Email/templates/signup_template.html");

    foreach($variables as $key => $value)
    {
        $template = str_replace('{{ '.$key.' }}', $value, $template);
    }

    $mail->Body  = $template;

    $mail->send();
    $_SESSION['message'] = "signup successful";
} catch (Exception $e) {
    $_SESSION['message'] = 'Email could not be sent. '. $mail->ErrorInfo;
}
