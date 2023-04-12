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

<head>   <!-- bootstrap link....-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"><!-- fonts from google  -->
    <link rel="stylesheet" href="css/style.css"><!--css-->
    <script src="js/script.js" defer></script>



<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="‪css/main.css">
 font awesome -->
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<title></title>
</head>


<body>

<!-- header section  -->

<section class="heading">
    <h1>about us</h1>
    <p> <a href="index.php">home</a> >> about </p>
</section>

<!-- header section -->

<!-- about section starts  -->

<section class="about">

    <h1 class="title">why choose us?</h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>Happy 18th BirthDAY RAHIL</h3>
            <p>with great power comes great responsibility</p>
            <p>but for now u'll only get your pancard as u</p>
            <p>Entered in your legality</p>
            <p>Your sweet childhood is over and its time to act</p>
            <p>like an adult without tantrum
            <p>I pray u get a every happiness, sucess and life like<h3>RaNSoM</h3>~stevieutopia</p>
            <a href="#" class="btn">read more</a>
        </div>
        
    </div>

    <div class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <h3>all Brands</h3>
        </div>

        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <h3>free delivery</h3>
        </div>

        <div class="icons">
            <img src="images/icon-3.png" alt="">
            <h3>easy returns</h3>
        </div>

        <div class="icons">
            <img src="images/icon-4.png" alt="">
            <h3>easy payments</h3>
        </div>

        <div class="icons">
            <img src="images/icon-5.png" alt="">
            <h3>24/7 support</h3>
        </div>

    </div>

</section>

<!-- about section ends -->



<!-- footer section starts  -->

<section class="footer">

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
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" placeholder="enter your emal">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

    
</section>

<!-- footer section ends -->

</body>
</html>