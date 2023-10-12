<?php

ob_start();
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function contact_form() {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $project = filter_var($_POST['project'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ),
    );

    $mail->SMTPAuth = true;
    $mail->Username = 'charlesignacio6@gmail.com';
    $mail->Password = 'swwfvohofrusjhwa';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('charlesignacio6@gmail.com', 'noreply');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Thanks for contacting!';

    $email_template = "
        <h4><b>Thanks for contacting me!</b></h4><br>
        Information you've submitted: <br><br>
        Full Name: $name <br>
        Email: $email <br>
        Project: $project <br> <br>
        Message: $message <br><br><br>

        Follow me on my official Facebook Page: <br>
        <a href='https://facebook.com/chaaarles.ei'>https://facebook.com/chaaarles.ei</a>  
    ";

    $mail->Body = $email_template;

    if ($mail->send()) {
        $_SESSION['status'] = "Sent!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
    }
    
    else {
        $_SESSION['status'] = "Something went wrong.";
        $_SESSION['status_code'] = "error";
        header("Location: index.php");
    }

    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    $mail->setFrom('charlesignacio6@gmail.com', $name);
    $mail->addAddress('charlesignacio6@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Contact Form';

    $email_contact = "
        <h4><b>Someone contacted you!</b></h4><br>
        Information submitted: <br><br>
        Full Name: $name <br>
        Email: $email <br>
        Project: $project <br> <br>
        Message: $message <br><br><br>
    ";

    $mail->Body = $email_contact;

    if ($mail->send()) {
        $_SESSION['status'] = "Sent!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
    }
    
    else {
        $_SESSION['status'] = "Something went wrong.";
        $_SESSION['status_code'] = "error";
        header("Location: index.php");
    }
}

if (isset($_POST['contact_btn'])) {
    contact_form();
}

else {
    $_SESSION['status'] = "Something went wrong.";
    $_SESSION['status_code'] = "error";
    header("Location: index.php");
}

ob_end_flush();

?>
