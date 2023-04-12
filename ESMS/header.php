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
if (!isset($_SESSION['name'])) {
    header("Location: index.php");
}



?>
<!doctype html>
<html>
<head>
<title>Products</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/style.css"><!--css-->
<script src="js/script.js" defer></script>
</head>
<body>
  
<header class="header">
<a href="welcome.php" class="logo"> RaNSoM </a>
  
<nav class="navbar">
<ul>
  <li><a  href="welcome.php"> HOME</a></li>
  <li><a>products</a>
    <ul>
	  <li><a href="lava.php">Mobile</a></li>       
    <li><a href="laptop.php">Laptop</a></li>
	  <li><a href="TV.php">TV</a></li>
    <li><a href="HT.php"> HomeTheater</a></li>
    </ul></li>
    <li><a  href="blogs.php"> Blog</a></li>
    <li><a  href="about.php"> About</a></li>
    <li><a  href="contact.php"> contact</a></li>

    <li><a href="#">account +</a>
     <ul>
         <li><a href="index2.php">login</a></li>
          <li><a href="register2.php">register</a></li>
          <li><a href="logout.php">logout</a></li>
     </ul></li>
</ul>
</nav>

<div class="icons">
<div id="menu-btn" class="fas fa-bars"></div>
<div id="search-btn" class="fas fa-search"></div>
	<?php  
	$count=0;
	if(isset($_SESSION['cart']))
	{
		$count=count($_SESSION['cart']);
	}
	?>
<a href="cart.php"  class="fas fa-shopping-cart"></a>
</div>

<form action="" class="search-form">
<input type="search" name="" placeholder="search here..." id="search-box">
<label for="search-box" class="fas fa-search"></label>
</form>

<div>
<li>
  <?php echo "<a class='logo' >   Welcome " . $_SESSION['name'] .     "</a>"; ?>
</li>  </div>

</header>

</body>
</html>