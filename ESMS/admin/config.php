<?php //configuration of admin login form...!!!!

$server = "localhost";
$user = "root";
$pass = "";
$database = "esms_main";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
