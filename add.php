<?php
require_once 'config/db.php';
//error_reporting(E_ALL);

//print_r($_POST);

$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';

$tbl = "profile";

$sql = "INSERT INTO `profile` (`name`, `email`, `gender`, `dob`) VALUES ('$username','$email','$gender','$date')";
//echo $sql;
//print_r($con);
$res = mysqli_query($conn, $sql);

//$ret = new stdclass();
if ($res) {
    //$ret->err = 0;
    //$ret->msg = "Information saved successfully";
    $ret = ['err' => 0, 'msg' => 'Information saved successfully'];
} else {
    //$ret->err = 1;
    //$ret->msg = "Error updating information";
    $ret = ['err' => 1, 'msg' => 'Error updating information'];
}
echo json_encode($ret);
