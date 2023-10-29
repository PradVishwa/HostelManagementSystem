<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "hostel");
if(!$con){
    die("Failed to connect". mysqli_connect_error());
}
?>
