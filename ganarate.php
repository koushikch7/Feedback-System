<div align='center'><button class='button' onclick="location.href='index.php'">Back</button></div>
<?php
session_start();
function randomString($length = 6) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

require 'dhead.php';
require 'connection.php';
$dept=$_SESSION["dept"];
$sql = "select * from student where dept='".$dept."'";


$a=array();
$b=array();
 if($result1 = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result1) > 0){
        while($row = mysqli_fetch_array($result1)){
			array_push($a,$row['email']);
			array_push($b,$row['usnno']);
		}
	}
 }
 
 
for($i=0;$i<sizeof($a);$i++){
            $password= randomString();
            $to = $a[$i];
            $usn = $b[$i];
            date_default_timezone_set('Etc/UTC');
            require_once('./PHPMailer/PHPMailerAutoload.php');
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

            $mail->Body = 'Dear Student, Your login username: '.$usn.' and login password: '.$password; // Set a plain text body.

            if ($mail->send()) {
				sleep(2);
                echo "Email was sent successfully to ".$a[$i]." => ".$b[$i];
            } else {
                echo $a[$i]." => ".$b[$i] ."Mailer Error: " . $mail->ErrorInfo;
            }
            mysqli_query($con,"update student set pass='". $password."',pdate=now() where stuid='".$row["stuid"]."'");
}

?>