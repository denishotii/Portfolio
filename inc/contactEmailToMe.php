<?php
    session_start();
    // $emailPassword = "reksa789";
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
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
    $mail ->addAddress('denishoti18@gmail.com');
    $mail ->addReplyTo('ishoponline05.@gmail.com');
    
    $mail ->isHTML(true);
    $mail ->Subject = 'Denis Hoti | New Message';
    $mail -> Body = '
    <p>You got a new message from: '.$name.'</p>
    <p>Message: <br>'.$message.'</p>
    <p>Reply to: '.$email.'</p>
    ';
    
    if(!$mail->send()){
        echo "Messages Could not be send!";
        echo 'Error: '. $mail->ErrorInfo;
    }
    else{
    
        header("Location: ../index.php?contact=Message sent!");
}

?>