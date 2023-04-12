<!-- css file name 'main.css'-->
<?php
include('header.php');
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

<!DOCTYPE html>
<html>
    <head><title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"><!-- fonts from google  -->
    <link rel="stylesheet" href="css/style.css"><!--css-->
    <script src="js/script.js" defer></script>
    </head>

<body>
<section class="heading"><!-- header section  -->
    <h1>contact us</h1>
    <p> <a href="index.php">home</a></p>
</section>


<section class="contact"><!-- contact section starts  -->
<h1 class="title"> get in touch </h1>
<div class="row">


<form action="insert.php" method="POST">
    <input type="text" placeholder="your name" class="box" name="name" required >
    <input type="email" placeholder="your email" name="email" class="box">
    <textarea name="query" placeholder="your message" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="save" value="send message" class="btn">
</form>

<iframe class="map" src="images/terms.txt" allowfullscreen="" loading="lazy"></iframe>

</div>
</section>

<section class="footer"><!-- footer section starts  -->

<div class="box-container">
<div class="box">
    <h3>quick links</h3>
    <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
    <a href="products.html"> <i class="fas fa-angle-right"></i> products</a>
    <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
    <a href="blogs.html"> <i class="fas fa-angle-right"></i> blogs</a>
    <a href="contact.html"> <i class="fas fa-angle-right"></i> contact</a>
    <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
    <a href="register.php"> <i class="fas fa-angle-right"></i> register</a>
    <a href="cart.html"> <i class="fas fa-angle-right"></i> cart</a>
</div>

<div class="box">
    <h3>extra links</h3>
    <a href="#"> <i class="fas fa-angle-right"></i> my account </a>
    <a href="#"> <i class="fas fa-angle-right"></i> my order </a>
    <a href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
    <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
    <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
</div>

<div class="box">
    <h3>follow us</h3>
    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
    <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
    <a href="#"> <i class=""></i> github </a>
</div>

</div>
</section>

</body>
</html>