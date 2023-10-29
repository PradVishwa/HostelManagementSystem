<?php

require('config.php');
session_start();
//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $customername = $_SESSION['customername'];
    $email = $_SESSION['email'];
    $contactno = $_SESSION['contactno'];
    $price = $_SESSION['price'];
    $branch = $_SESSION['branch'];
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $month = $_SESSION['month'];


    $sql = "INSERT INTO `tbl_fee`( `f_name`, `f_email`, `f_mobile`, `amount`, `f_branch`,`order_id`, `razorpay_payment_id`, `status`,`month`, `dorp`) VALUES ('$customername','$email','$contactno','$price','$branch','$razorpay_order_id','$razorpay_payment_id','success','$month',now())";
    if(mysqli_query($conn, $sql)){
        echo "payment details inserted to db";
    }

    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>
             <a href='../student/fee_pay.php'>Back To Home</a>
             
             ";

    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>
             <a href='../student/fee_pay.php'>Back To Home</a>";
}

echo $html;