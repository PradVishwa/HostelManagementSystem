<?php
require("dbcon.php");

if(isset($_GET['email']) && isset($_GET['v_code'])){
    $email = $_GET['email'];
    $v_code = $_GET['v_code'];


    $query =" SELECT * FROM tbl_student WHERE email='$email' AND verification_code = '$v_code'";
    $result = mysqli_query($con, $query);
    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==0){
                $update = "UPDATE tbl_student SET `is_verified`='1' WHERE email='$result_fetch[email]'";
                if(mysqli_query($con,$update)){
                    echo "
                        <script>
                            alert('Email Verification successfull and Hostel Request Successfull');
                            window.location.href='index.php';
                        </script>
                    ";
                    
                }
                else{
                    echo "
                        <script>
                            alert('Can not run Query1');
                            window.location.href='index.php';
                        </script>
                    ";

                }
            }
            else{

                echo "
                    <script>
                        alert('Email Already Verified');
                        window.location.href='index.php';
                    </script>
                ";
            }
        }
    }
    else{
        echo "
            <script>
                alert('can not run query2');
                window.location.href='index.php';
            </script>
        ";
    }
}
?>