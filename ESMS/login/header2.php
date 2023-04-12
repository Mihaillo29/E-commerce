<?php 
include('config.php');
session_start();  //backup for alternative of header.php for webdev....

if (!isset($_SESSION['name'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Font Awesome Icon Library -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">
		
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
		<style type="text/css">
          .mySlides {display: none;}
          

		<!-- css code for star rating -->
			.checked {
			color: orange;
		}
		<!--end of css code for star rating -->

}

		</style>
          <meta charset="utf-8">
		<title>Welcome</title>
	</head>
<body  >
           <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		 
    
	<p> <?php echo "<h4 style='color:black' >Welcome " . $_SESSION['name'] .     "</h4>"; ?> </p> <!-- {log in  --> 

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php" STYLE="  font-family:Sans-serif; background-color: #94928b;
  border: solid;
  border-color:#f2e0ae;
  color:black ;
  padding: 16px 25px;
  text-align: center;
  font-size: 14px;
  margin: 2px 2px;
  transition: 0.3s;" id="h1"> home <span class="sr-only">(current)</span></a>
      </li>
	 <li>
	 <a href="mycart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
	</li>	
	</ul>
	</div>
</body>
</html>	