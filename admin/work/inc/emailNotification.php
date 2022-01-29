<?php

    require 'PHPMailer/PHPMailerAutoload.php';
    require 'PHPMailer/class.phpmailer.php';
// Passing `true` enables exceptions
$mail = new PHPMailer;                              
if (isset($_GET['title'])) {
    $title = $_GET['title'];
    $description = $_GET['description'];
    $link = $_GET['link'];
}

        include "../../config.php";
        $select = "SELECT * FROM subscribers";

        $query = mysqli_query($connect, $select);

        while( $row = mysqli_fetch_array($query))
        {
	          $email = $row['suEmail'];
            



	$mail->isSMTP();                 
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
    $mail ->Subject = 'Denis Hoti | New Project is OUT';

    $mail->Body    = '
        <p>Hi, this is an Email from Denis.</p>
        <p>I have just posted my new Project:<b>'.$title.'</b></p>
        <p>A short description: <b>'.$description.'<b></p>
        <p>View the project <a href="'.$link.'">HERE</a></p><br>
        <p>Have a look <a href="http://localhost/Portfolio/work.php">HERE</a></p>
        <br><br>
        <h6>Sincerely<br>Denis</h6>
    ';

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Error: '. $mail->ErrorInfo;
}else{
	// header("Location: index.php?emailSent=succes");
    echo 'Message has been sent.'."<br>";
}	

}
    header("Location: ../addNew.php?error=Work addedd SUCCESSFULLY also EMAIL SENT TO ALL SUBSCRIBERS");
    
?>