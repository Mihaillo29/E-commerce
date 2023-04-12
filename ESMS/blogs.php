<!DOCTYPE html>
<html lang="en">
<head><title>home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"><!-- fonts from google  -->
        <link rel="stylesheet" href="css/style1.css"><!--css-->
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
  
  </header>

<section class="heading"><h1>our blogs</h1><p> <a href="index.php">home</a> >> blogs </p></section>

<section class="blogs">
<h1 class="title">our daily posts</h1>

 <div class="box-container">

<div class="box">
<div class="image"><img src="images/blog-1.jpg" alt=""></div>

    <div class="content"><h3>RaNSoM</h3>
        <p>An Ordinary guy good at nothing...</p><a href="#" class="btn">read more</a>
        <div class="icons">
            <a href="#">29 sep, 2003 </a>
            <a href="#">by admin </a>
        </div>
    </div>
 </div>
    
<div class="box">
<div class="image"> <img src="images/blog-2.jpg" alt=""></div>

    <div class="content"><h3>Stevieutopia</h3>
        <p>A wonderfull girl with wonderfull dreams wishing it to becomes true some days </p><a href="#" class="btn">read more</a>
        <div class="icons">
            <a href="#"> </i> 26 FEb, 2003 </a>
            <a href="#"> by admin </a>
        </div>
    </div>
</div>
    
<div class="box">
<div class="image"><img src="images/blog-3.jpg" alt=""></div>

    <div class="content"><h3>Tehreem</h3>
        <p>sweet from heart, dumb from brain</p><a href="#" class="btn">read more</a>
        <div class="icons">
            <a href="#">  4 Aug, 2003 </a>
            <a href="#">  by admin </a>
        </div>
    </div>
</div>


</div>

<section class="footer"><!-- footer section -->

<div class="box-container">

<div class="box">
    <h3>quick links</h3>
    <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
    <a href="blogs.php"> <i class="fas fa-angle-right"></i> blogs</a>
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