<?php
include('con.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
if (isset($_POST['check-email'])) {
    extract($_POST);
    // echo $who;
    $check_email = "select * from tbl_$who where email='$email'";
    // echo $check_email;
    $run_sql = mysqli_query($conn, $check_email);
    
    if ($row=mysqli_fetch_array($run_sql)) {
        $code = rand(999999, 111111);
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['otp'] = $code;

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'securestudents2023@gmail.com';                     //SMTP username
            $mail->Password   = 'vbtdrmnyrjhfjkis';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('securestudents2023@gmail.com', 'Student Security System');
            $mail->addAddress($email);     //Add a recipient

          
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Arrival Time of Child';
            $mail->Body    = 'Message :'.$code;

            // $mail->send();
            if ($mail->send()) {
unset($_SESSION['errors']);
$_SESSION['info']="otp send successfully on you Email";

                header('Location:reset-code.php');
            }
        } catch (Exception $e) {
            $errors['email'] = "Message could not be sent. check connection please";
        $_SESSION['errors']=$errors;
        }
    }
    else{
        $errors['email'] = "This email address does not exist!";
        $_SESSION['errors']=$errors;
        // header('Location:forgot-password.php');
    }
}
