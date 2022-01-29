<?php
    session_start();
    // $emailPassword = "reksa789";
    $email = $_SESSION["myEmail"];
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
    $mail ->Subject = 'Denis Hoti | Admin Account Confirmation';
    $mail -> Body = '
    <p>Hi, this is an Email from Denis.</p>
    <p>Please Click <a href="http://localhost/Portfolio/admin/inc/confirm.php?email='.$email.'">here</a> to confirm your admin account or copy and paste the link below in your browser:</p>
    <p>http://localhost/Portfolio/admin/inc/confirm.php?email='.$email.'</p>
    <br><br>
    <h6>Sincerely<br>Denis</h6>
    ';
    
    if(!$mail->send()){
        echo "Messages Could not be send!";
        echo 'Error: '. $mail->ErrorInfo;
    }
    else{
    
        header("Location: ../login.php?error=Signup success, please confirm your email");
}

?>