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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap');

:root{
    --white-light: rgba(255, 255, 255, 0.5);
    --alice-blue: #f8f9fa;
    --carribean-green: #40c9a2;
    --gray: #ededed;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Quicksand', sans-serif;
}

/* Utility stylings */
/*use in lava.php */
img{
    width: 100%;
    display: block;
}
.container{
    width: 88vw;
    margin: 0 auto;
}
.lg-title,
.md-title,
.sm-title{
    font-family: 'Roboto', sans-serif;
    padding: 0.6rem 0;
    text-transform: capitalize;
}
.lg-title{
    font-size: 2.5rem;
    font-weight: 500;
    text-align: center;
    padding: 1.3rem 0;
    opacity: 0.9;
}
.md-title{
    font-size: 2rem;
    font-family: 'Roboto', sans-serif;
}
.sm-title{
    font-weight: 300;
    font-size: 1rem;
    text-transform: uppercase;
}
.text-light{
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    opacity: 0.5;
    margin: 0.4rem 0;
}

/* product section */
.products{
    background: var(--alice-blue);
    padding: 3.2rem 0;
}
.products .text-light{
    text-align: center;
    width: 70%;
    margin: 0.9rem auto;
}
.product{
    margin: 2rem;
    position: relative;
}
.product-content{
    background: var(--gray);
    padding: 3rem 0.5rem 2rem 0.5rem;
    cursor: pointer;
}
.product-img{
    background: var(--white-light);
    box-shadow: 0 0 20px 10px var(--white-light);
    width: 200px;
    height: 200px;
    margin: 0 auto;
    border-radius: 50%;
    transition: background 0.5s ease;
}
.product-btns{
    display: flex;
    justify-content: center;
    margin-top: 1.4rem;
    opacity: 0;
    transition: opacity 0.6s ease;
}
 .btn-buy{
    background: transparent;
    border: 1px solid black;
    padding: 0.8rem 0;
    width: 125px;
    font-family: inherit;
    text-transform: uppercase;
    cursor: pointer;
    border: none;
    transition: all 0.6s ease;
}


.btn-buy{
    background: white;
}
.btn-buy:hover{
    background: var(--carribean-green);
    color: #fff;
}
.product-info{
    background: white;
    padding: 2rem;
}
.product-info-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.rating span{
    color: var(--carribean-green);
}
.product-name{
    color: black;
    display: block;
    text-decoration: none;
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: bold;
}
.product-price{
    padding-top: 0.6rem;
    padding-right: 0.6rem;
    display: inline-block;
}
.product-price:first-of-type{
    text-decoration: none;
    color: var(--carribean-green);
}
.product-img img{
    transition: transform 0.6s ease;
}
.product:hover .product-img img{
    transform: scale(1.1);
}
.product:hover .product-img{
    background: var(--carribean-green);
}
.product:hover .product-btns{
    opacity: 1;
}

/* product collection */
.product-collection{
    padding: 3.2rem 0;
}
.product-collection-wrapper{
    padding: 3.2rem 0;
}
.product-col-left{
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-1.jpg") center/cover no-repeat;
}
.product-col-r-top{
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-2.png") center/cover no-repeat;
}
.flex{
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 50vh;
    padding: 2rem 1.5rem 3.2rem;
    margin: 5px;
}
.product-col-r-bottom > div:first-child{
    background: #eaa001;
}
.product-col-r-bottom > div:last-child{
    background: #0090ff;
}
.product-col-content{
    text-align: center;
    color: white;
}
.product-collection .text-light{
    opacity: 1;
    font-size: 0.8;
    font-weight: 400;
    line-height: 1.7;
}
.btn-dark{
    background: black;
    color: white;
    outline: 0;
    border-radius: 25px;
    padding: 0.7rem 1rem;
    border: 0;
    margin-top: 1rem;
    cursor: pointer;
    transition: all 0.6s ease;
    font-size: 1rem;
    font-family: inherit;
}
.btn-dark:hover{
    background: var(--carribean-green);
}

/* Media Queries */
@media screen and (min-width: 992px){
    .product-items{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .product-col-r-bottom{
        display: grid;                                                    /*grids css*/
        grid-template-columns: repeat(2, 1fr);
    }
}
@media screen and (min-width: 1200px){
    .product-items{
        grid-template-columns: repeat(3, 1fr);
    }
    .product{
        margin-right: 1rem;
        margin-left: 1rem;
    }
    .products .text-light{
        width: 50%;
    }
}

@media screen and (min-width: 1336px){
    .product-items{
        grid-template-columns: repeat(4, 1fr);
    }
    .product-collection-wrapper{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .flex{
        height: 60vh;
    }
    .product-col-left{
        height: 121.5vh;
    }
}
</style>
	
	

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- <link rel="stylesheet" href="‪css/main.css">
         font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <?php   print_r($_SESSION['cart']); ?>   
        <div class = "container" class="products"> 
            <div class = "row" class="container"> 
			
<?php 
$query = "SELECT * FROM mobiles ";

$queryfire = mysqli_query($con, $query) OR DIE(mysqli_error());
$num = mysqli_num_rows($queryfire);
if($num>0){
	while($product= mysqli_fetch_array($queryfire)){     // error line     

		?> 
	               
            <div class = "col-lg-3" class="product-item"> 
                    <!-- single product -->
					<form action="manage_cart.php" method="post"  enctype="multipart/form-data" >
                <div class = "card" class="product">  
				            <div class = "product-content"> <!-- card body -->
                               <div class = "product-img">
                                    <img src = "<?php echo $product['image']; ?>" alt = "product image">
                                 </div>
                            </div>

                            <div class = "product-info">
                                <div class = "product-info-top">
                                 <p class = "product-name"  ><?php echo $product['description']; ?> </p>  
                                  <!--<input type="hidden" name="description" value="description">-->
								</div>
                                 <p class = "product-price" >&#8377‪<?php echo $product['price']; ?>/-</p>
								 <!--<input type="hidden" name="price" value="price">-->
                            
	                        </div>
							<div >
							<center>
                                  <button type = "submit" name="mob_add_to_cart" class="btn btn-info"> add to cart
                                      <span><i class = "fas fa-shopping-cart"></i></span>
                                  </button></center>
								  <input type="hidden" name="description" value="description">
					              <input type="hidden" name="price" value="price">
                            </div> 
							<br>
				</div> 
		           </form>	
			</div>  
			<?php
}}
			 ?>
			</div>
		</div>
                 
    </body>
</html>