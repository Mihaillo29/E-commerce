<!DOCTYPE html><!-- CSS FILE NAME MAINSTYLE.CSS -->
	<html><!-- 1st index page..of course -->
	<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/style1.css"><!--css-->
  <script src="js/script.js" defer></script>

          <meta charset="utf-8">
		<title>RaNsoM</title>
	</head>
  
	<body >
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




<section class="home">

<div class="slide active" style="background: url(images/home-bg-1.png) no-repeat;">
    <div class="content">
        <span>XIAOMI</span>
        <h3>Special offers</h3>
        <a href="#" class="btn">shop now</a>
    </div>
</div>

<div class="slide" style="background: url(images/home-bg-2.png) no-repeat;">
    <div class="content">
        <span>OLED protect your eyes</span>
        <h3>SAMSUNG OLED</h3>
        <a href="#" class="btn">shop now</a>
    </div>
</div>

<div class="slide" style="background: url(images/home-bg-3.png) no-repeat;">
    <div class="content"><span>ENJOY THE LIFE WITH MUSICS</span><h3>HEADSETS</h3><a href="#" class="btn">shop now</a></div>
</div>

<div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
<div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

</section>

<section class="banner"><!-- banner section starts  -->

<div class="box">
    <img src="images/banner-1.jpg" alt="">
    <div class="content"><span>GET THE FLAGSHIP</span><h3>IPHONES </h3><a href="login/index2.php" class="btn">shop now</a></div>
</div>

<div class="box">
    <img src="images/banner-2.jpg" alt="">
    <div class="content"><span>XIAOMI</span><h3>upto 20% off</h3><a href="login/index2.php" class="btn">shop now</a></div>
</div>

<div class="box">
    <img src="images/banner-3.jpg" alt="">
    <div class="content"> <span>      TV</span><h3>upto 20% off</h3><a href="login/index2.php" class="btn">shop now</a></div>
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
		

<script>
  let searchForm = document.querySelector('.header .search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}

let slides = document.querySelectorAll('.home .slide');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}
</script>

	
	</body>
	</html>

