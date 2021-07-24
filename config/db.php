<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crudajax";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Error");
} else {
    //echo "connected";
}
