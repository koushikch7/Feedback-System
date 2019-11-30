<?php require 'xampp.php';
$email = strtoupper($_POST['email']);
require 'connection.php';
try{
    $sql123="select * from dept where email='".$email."'";

$result123 = mysqli_query($con,$sql123);
if ($row123 = mysqli_fetch_assoc($result123))
{
    $passwordd= $row123['pass'];
    date_default_timezone_set('Etc/UTC');
    require './PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
    $mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
    $mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
    $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
    $mail->Username = "techvruksha.cse@gmail.com"; // Your Gmail address.
    $mail->Password = "techvruksha.cse"; // Your Gmail login password or App Specific Password.

    $mail->setFrom('BitmFeedback@bitm.edu.in', 'FeedBack Website'); // Set the sender of the message.
    $mail->addAddress($email); // Set the recipient of the message.
    $mail->Subject = 'Your login details for Student Feedback system'; // The subject of the message.

    $mail->Body = 'Your login username: '.$email.' and login password: '.$password; // Set a plain text body.

    if ($mail->send()) {
        echo "Your message was sent successfully!";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
 header('Location: forgotmsg.php?msg=Plese check your Mail for the Password&color=green');
     
}else{
   

 
  header('Location: forgotmsg.php?msg=Mail ID NOT Exist&color=red');
}
}catch(Exception $e) {
  header('Location: forgotmsg.php?msg=Mail ID NOT Exist&color=red');
}
?>