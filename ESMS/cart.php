<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style1.css"><!--css-->
    <script src="js/script.js" defer></script>
    </head>
<body>

<header class="header">
    <a href="index.php" class="logo"> RaNSoM </a>
     <!-- change here  -->
      
      
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
      <div><li><a class="logo" href="login/index2.php"> Login/Register Here</a></li></div>
</header>

<section class="heading">
    <h1>shopping cart</h1>
    <p> <a href="index.php">home</a> >> cart </p>
</section>

<!-- cart section starts  -->

<section class="shopping-cart">

    <h1 class="title"> your products </h1>

    <div class="box-container">



    </div>

    <h1 class="title">checkout cart</h1>

    <div class="cart-total">
        <a href="#" class="btn">proceed to checkout</a>
    </div>

</section>

<section class="footer"><!-- footer section -->

<div class="box-container">

<div class="box">
    <h3>quick links</h3>
    <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
    <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
    <a href="login/index2.php"> <i class="fas fa-angle-right"></i> login</a>
    <a href="login/register2.php"> <i class="fas fa-angle-right"></i> register</a>
    <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
</div>

<div class="box">
    <h3>extra links</h3>
    <a href="login/index2.php"> <i class="fas fa-angle-right"></i> my account </a>
    <a href="cart.php"> <i class="fas fa-angle-right"></i> my order </a>
    <a href="cart.php"> <i class="fas fa-angle-right"></i> my wishlist </a>
    <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
    <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
</div>

<div class="box">
    <h3>follow us</h3>
    <a href="https://www.facebook.com/APshahTHANE/"> <i class="fab fa-facebook-f"></i> facebook </a>
    <a href="https://twitter.com/apsit_thane?lang=en"> <i class="fab fa-twitter"></i> twitter </a>
    <a href="https://www.instagram.com/explore/locations/452019390/pcts-ap-shah-institute-of-technology-thane/"> <i class="fab fa-instagram"></i> instagram </a>
    <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGtM-tTbI4SEgAAAYPLEQXQszQw58WjbRDdle_P3wRMehWO5gjBwyR9QN-91xr5K_wpbjRkM5WwZjhQ5pV7bovu5uaOLgsJcnLjI-oG76R_ElOsVdMeA9KjO1z0lhAIiL6Fsjs=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fvisiongate%2F"> <i class="fab fa-linkedin"></i> linkedin </a>
</div>

</div>
</section>

</body>
</html>