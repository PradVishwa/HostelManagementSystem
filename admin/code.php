<?php
include("../dbcon.php");
$pass=12345;
$_SESSION['pass']=$pass;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email, $pass)
{
    require("../PHPMailer/PHPMailer.php");
    require("../PHPMailer/SMTP.php");
    require("../PHPMailer/Exception.php");

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
        $mail->Subject = 'Government Polytechnic Aadampur Tarabganj Gonda';
        $mail->Body    = "Dear Student, <br><br>
        <b>Welcome on Government Polytechnic Aadampur, Tarabganj Gonda (Hostel)</b>,<br><br>
        Your Hostel Request has been accepted.</br>
        Login To View Your Hostel  Student Profile </br>
        Your
            <b>Login id/ User name :</b> Is Your Registered <b> Email</b> and</br>
            <b>Password: </b>$pass </br><br>

            Thanks,<br>
            GP Aadampur Gonda.

        ";

        $mail->send();
        // echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}



if (isset($_REQUEST['status'])) {

    $id = $_REQUEST['id'];
    $status = $_REQUEST['status'];
    $pass=$_SESSION['pass'];

    if ($status == 1) {
        // echo $status;
        $query = "UPDATE tbl_student SET status='1', password=$pass where req_id='$id'";
        mysqli_query($con, $query);
        header("location:stu_register.php");
    } elseif ($status == 0) {
        $query = "UPDATE tbl_student SET status='0' where req_id='$id'";
        mysqli_query($con, $query);
        header("location:stu_register.php");
    } else {
        echo "
        <script>
        alert('Access Denide');
        window.location.href='stu_register.php';
        </script>
        ";
    }
}

// room allotement

// require("../dbcon.php");
if (isset($_REQUEST['allote'])) {

    // require("../dbcon.php");
    $req_id = $_REQUEST['request_id'];
    $allote = $_REQUEST['allote'];
    if ($allote == 1) {
        $query = "select * from tbl_student where req_id='$req_id'";
        // alloted_room
        $res = $con->query($query);
        $row = mysqli_fetch_array($res);
        $name = $row['name'];
        $roll_no = $row['roll_no'];
        $email=$row['email'];
        $pass=$_SESSION['pass'];
        // echo $roll_no.$name;
        $query = "update tbl_student set status = 'alloted' where req_id='$req_id'";
        // $con->query($query);
        // echo $query;
        if ($con->query($query) && sendMail($email, $pass)) {
            // echo "update successfully";
            $query = "select * from tbl_alloted_room";
            $res = $con->query($query);
            while ($row = mysqli_fetch_array($res)) {
                $room_no = $row['room_no'];
                // echo $room_no;
                if ($row['s1'] == 'null') {
                    // echo $roll_no;
                    $query = "update tbl_alloted_room set s1 = '$roll_no' where room_no='$room_no'";
                    // echo $query;
                    $con->query($query);
                    if ($con->query($query)) {
                        echo "
                            <script>
                        alert('alloted room no $room_no');
                        window.location.href='alloted_room.php';
                        </script>
                        ";
                        
                        // header("location:alloted_room.php");
                        exit();
                    }
                } elseif ($row['s2'] == 'null') {
                    // echo $roll_no;
                    $query = "update tbl_alloted_room set s2 = '$roll_no' where room_no='$room_no'";
                    // echo $query;
                    $con->query($query);
                    if ($con->query($query)) {
                        echo "
                        <script>
                    alert('alloted room no $room_no');
                    window.location.href='alloted_room.php';
                    </script>
                    ";
                        exit();
                    }
                } elseif ($row['s3'] == 'null') {
                    // echo $roll_no;
                    $query = "update tbl_alloted_room set s3 = '$roll_no' where room_no='$room_no'";
                    // echo $query;
                    $con->query($query);
                    if ($con->query($query)) {
                        echo "
                            <script>
                        alert('alloted room no $room_no');
                        window.location.href='alloted_room.php';
                        </script>
                        ";
                        exit();
                    }
                }
            }
        }
    }
}
