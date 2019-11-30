<?php 
require 'connection.php';
mysqli_select_db($con, 'college');
session_start();
$sql = "select * from faculty;";
 if($result1 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result1) > 0){
         while($row = mysqli_fetch_array($result1)){
            $password= $row["pass"];
            $to = $row["email"];
            date_default_timezone_set('Etc/UTC');
            //require './PHPMailer/PHPMailerAutoload.php';
			require_once('./phpMailer/PHPMailerAutoload.php');
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
            $mail->Subject = 'Your login details for BITM Student Feedback system'; // The subject of the message.

            $mail->Body = 'Your login username: '.$to.' and login password: '.$password; // Set a plain text body.

            if ($mail->send()) {
				sleep(2);
                echo "Your message was sent successfully!";
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo .$to;
            }
        }
    }
} 

?>

