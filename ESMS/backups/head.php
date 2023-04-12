<?php
session_start();
//session_destroy();
$servername = "localhost";
$username = "root";
$password = "";
$database = "esms_main";

// Create a connection
$con = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error());
// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
} 




?>
<!doctype html>
<html>
<head>
<title>header</title>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- <link rel="stylesheet" href="‪css/main.css">
         font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h4 style="color:#91dee3;"><div>sheetal electronics</div></h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color:black;">Home <span class="sr-only"></span></a>
      </li>
    </ul>
	<div>
	<?php  
	$count=0;
	if(isset($_SESSION['cart']))
	{
		$count=count($_SESSION['cart']);
	}
	
	?>
   <a href="mycart.php" class="btn btn-outline-success">my cart</a>
   </div>
  </div>
</nav>
</body>


</html>heas