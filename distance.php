<?php
session_start();
// function distance($lat1, $long1, $lat2, $long2){
//     $theta = $long1 - $long2;
//     $dist = (sin(deg2rad($lat1))) * sin(deg2rad($lat2)) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
//     $dist = acos($dist);
//     $dist = rad2deg($dist);
//     $miles = $dist * 60 * 1.1515;
//     $result = $miles * 1.609344;
//     return (round($result,2));
// }
if (isset($_POST['cal'])) {
    $cal_culation = $_POST['location'];


    // $lat1 = 26.9254548;
    // $long1 = 81.8859516;
    // $lat2 = $_POST['loc_lat'];
    // $long2 = $_POST['loc_long'];
    // $cal_culation = distance($lat1, $long1, $lat2, $long2)." km";



    // var_dump($cal_culation);
    // print implode("",$cal_culation);

    if ($cal_culation == "") {
        $_SESSION['status'] = "invalid!";
        header("location:index.php");
    } else {

        if ($cal_culation >= 150) {
            $_SESSION['status'] = "Eligible";
            header("location:index.php");
        } else {
            $_SESSION['status'] = "Not eligible";
            header("location:index.php");
        }
    }
}
