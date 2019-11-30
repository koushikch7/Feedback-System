<?php 
require 'random.php';
$name = strtoupper($_POST['name']);
$email = strtoupper($_POST['email']);
$pass = generateStrongPassword(10);
$dept = $_POST['dept'];
require 'connection.php';
try{
 $sql88="select * from faculty where email='".$email."' ";

$result88 = mysqli_query($con,$sql88);
if ($row88 = mysqli_fetch_assoc($result88))
{
 header('Location: admsg.php?msg=Details Already Exist&color=red');
}else{
    
     $result = mysqli_query($con,"insert into faculty (name,email,pass,dept) values ('".$name."','".$email."','".$pass."','".$dept."')");
	 $to = $email;
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
        $mail->addAddress($to); // Set the recipient of the message.
        $mail->Subject = 'Your login details for Student Feedback system'; // The subject of the message.

        $mail->Body = 'Respected faculty, Your login username: '.$email.' and login password: '.$pass; // Set a plain text body.

    if ($mail->send()) {
        echo "Your message was sent successfully!";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
 header('Location: admsg.php?msg=Details Added&color=green');
}
 }catch(Exception $e) {
  header('Location: admsg.php?msg=Details Already Exist&color=green');
}
?>

