<?php
    session_start();
    // $emailPassword = "reksa789";
    $email = $_GET['email'];
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'PHPMailer/class.phpmailer.php';
     $mail = new PHPMailer;
     $mail ->isSMTP();
    
    $mail ->Host = 'smtp.gmail.com';
    $mail ->Port=587;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'tls';
    
    $mail ->Username = 'ishoponline05.@gmail.com';
    $mail ->Password = 'reksa789';
    $mail ->setFrom('ishoponline05.@gmail.com');
    $mail->FromName = "Denis Hoti | Support Team";
    $mail ->addAddress($email);
    $mail ->addReplyTo('ishoponline05.@gmail.com');
    
    $mail ->isHTML(true);
    $mail ->Subject = 'Denis Hoti | Newsletter';
    $mail -> Body = '
        <p>Hi,</p>
        <p>Thank you for subscribing to my newsletter, you are going to be notified for every new Blog I write or for every new project.</p>
        <p>Please feel free to contact for anything in my website.</p>
        <br>
        <br>
        Sincerely <br>
        Denis Hoti
        <br>
        <br>
        <br>
        <a href="http://localhost/Portfolio/inc/unsubscribe.php?email='.$email.'">Unsubscribe</a>
        ';
    
    if(!$mail->send()){
        echo "Messages Could not be send!";
        echo 'Error: '. $mail->ErrorInfo;
    }
    else{
    
        header("Location: ../index.php?success=You just subscribed!");
}

?>