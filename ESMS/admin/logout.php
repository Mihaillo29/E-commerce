<?php 
//logout page of admin login....!!!!

session_start();
session_destroy();

header("Location: admin_login.php");

?>