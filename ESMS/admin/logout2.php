<?php 
//logout page of emp_crud_login login....!!!!

session_start();
session_destroy();

header("Location: crud.php");

?>