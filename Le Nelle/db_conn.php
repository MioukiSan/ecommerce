<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="le nelle";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

// Check connection
if (!$conn){
    die("Maintenance Mode.");
}

session_start();
include_once ("sql_utilities.php");
