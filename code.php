<?php
require("dbcon.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email, $v_code)
{
    require("PHPMailer/PHPMailer.php");
    require("PHPMailer/SMTP.php");
    require("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cpalead.earn@gmail.com';                     //SMTP username
        $mail->Password   = 'pfkudaqnedjovgjx';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        // OR
        //TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_SMTPS`

        //Recipients
        $mail->setFrom('from@example.com', 'Govt. Poly. Hostel Aadampur, Gonda');
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email Verification From Govt. Poly. Hostel Aadampur Gonda';
        $mail->Body    = "Thanks for Hostel Request! <br>
        Click the link below to verify the email address <br>
        <a href='http://localhost/Hostel/verify.php?email=$email&v_code=$v_code'><h1>verify</1></a>";


        $mail->send();
        // echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}




// for request student
if (isset($_POST['request'])) {


    $appli_no = $_POST['appli_no'];
    $roll_no = $_POST['roll_no'];
    $distance = $_POST['dist'];
    $branch = $_POST['branch'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $aadhar = $_POST['aadhar'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rank = $_POST['rank'];
    $obt_mark = $_POST['obt_mark'];
    $address = $_POST['address'];
    $stu_pic_name = $_FILES['stu_pic']['name'];
    $stu_pic_type = $_FILES['stu_pic']['type'];
    $stu_pic_size = $_FILES['stu_pic']['size'];
    $stu_pic_tmp = $_FILES['stu_pic']['tmp_name'];
    $rank_card_name = $_FILES['rank_card']['name'];
    $rank_card_type = $_FILES['rank_card']['type'];
    $rank_card_size = $_FILES['rank_card']['size'];
    $rank_card_tmp = $_FILES['rank_card']['tmp_name'];

    if ($distance >= 150) {

       $slct_qry = "SELECT * FROM tbl_student Where appli_no='$appli_no' OR email='$email'";
        $res = mysqli_query($con, $slct_qry);

        if ($res) {
            if (mysqli_num_rows($res) > 0) {
                // if any user has already taken username or email 
                $result_fetch = mysqli_fetch_assoc($res);
    
                if ($result_fetch['appli_no'] == $appli_no) {
                    // error for username already exist 
                    echo "
                        <script>
                            alert('$result_fetch[appli_no] - Application No already exist');
                            window.location.href='index.php';
                        </script>
                    ";
                } else {
                    // error for email already exist 
                    echo "
                        <script>
                            alert('$result_fetch[email] - E-mail already registered');
                            window.location.href='index.php';
                        </script>
                     ";
                }
            } else { //if will executed when username and email are not match in database
    
                if ($appli_no == "" && $roll_no == "" && $email == "" && $branch == "" && $name=="" &&$fname=="" && $mname=="" && $aadhar=="" && $dob=="" && $gender=="" && $mobile=="" && $address=="" && $rank=="" && $obt_mark=="" && $stu_pic_name=="" && $rank_card_name=="") {
                    echo "
                        <script>
                            alert('Fill The Required Field!');
                            window.location.href='index.php';
                        </script>
                    ";
                } else {
    
                    // $password = password_hash($pass, PASSWORD_BCRYPT);
                    $v_code = bin2hex(random_bytes(16));

                    $query = "INSERT INTO `tbl_student`( `appli_no`, `roll_no`, `distance`, `branch`, `name`, `fname`, `mname`, `aadhar`, `dob`, `gender`, `mobile`, `email`, `password`, `rank`, `obt_mark`, `address`, `stu_img`, `rank_card`, `status`, `verification_code`, `is_verified`, `dor`)  VALUES ('$appli_no', '$roll_no', '$distance',  '$branch','$name','$fname','$mname','$aadhar','$dob','$gender','$mobile','$email','$password','$rank','$obt_mark','$address','$stu_pic_name','$rank_card_name','2','$v_code','0',now())";
                    // echo $query;
                    if (mysqli_query($con, $query) && sendMail($email, $v_code)) {
                        move_uploaded_file($stu_pic_tmp, "Data/img/$stu_pic_name");
                        move_uploaded_file($rank_card_tmp, "Data/pdf/$rank_card_name");
                        // data inserted Successfuly 
    
                        echo "
                        <script>
                            alert('Email verification link send to email.');
                            window.location.href='index.php';
                        </script>
                    ";
                    } else {
                        // data can not be inserted 
                        echo "
                        <script>
                            alert('Server Down');
                            window.location.href='index.php';
                        </script>
                     ";
                    }
                }
            }
        } else {
            echo "
                <script>
                    alert('Can not Run Query 1');
                    window.location.href='index.php';
                    </script>
                    ";
                }
    }else{
        echo "
                        <script>
                            alert('Sorry!  You are not Eligible for Hostel');
                            window.location.href='index.php';
                        </script>
                    ";
    }

}
// for check status
if (isset($_POST['check_status'])) {
    echo  $email_mobile = $_POST['email_mobile'];

    $slct_qry = "SELECT * FROM tbl_student WHERE email='$email_mobile' OR mobile='$email_mobile'";
    $res = mysqli_query($con, $slct_qry);
    $row = mysqli_fetch_array($res);
    if ($row) {
        $slct_qry2 = "SELECT * FROM tbl_student WHERE email='$email_mobile' OR mobile='$email_mobile'";
        $res2 = mysqli_query($con, $slct_qry2);
        $row2 = mysqli_fetch_array($res2);
        if ($row2['status'] == 0) {
            echo "
                <script>
                    alert('Hostel not alloted');
                    window.location.href='index.php';
                </script>
            ";
        } elseif ($row2['status'] == 1) {
            echo "
                <script>
                    alert('Hostel alloted');
                    window.location.href='index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Hostel alloted pending...');
                    window.location.href='index.php';
                </script>
            ";
        }
    } else {

        echo "
            <script>
                alert('Your email/mobile not requested');
                window.location.href='index.php';
            </script>
        ";
    }
}
