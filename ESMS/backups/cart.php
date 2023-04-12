<?php

 include('header.php');
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CART</title>
</head>
<body>
  <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center border rounded bg-light my-5">
	          <h2>MY CART</h2>	 
			  <div class="col-lg-8">
			    <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">sr_no</th>
      <th scope="col">product description</th>
      <th scope="col">price</th>
      <th scope="col">Quantity</th>
	  <th scope="col">total</th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php
        $total=0;
		$id = $_GET["id"];
		$description = $_POST["description"];
        $price = $_POST["price"];
		$query = "SELECT * FROM mobiles ";
  if(isset($_SESSION['cart']))
  {   
      foreach($_SESSION['cart']as $key => $value)
	  {   $id=$key+1;
         // $total=$total + $value['price'];
		 print_r($value);
		  echo"
	      <tr>
		  <td>$id</td>
		  <td>$value[description]</td>
		  <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
		  <td><input class='text-center iquantity' type='number' value='$value[Quantity]' min='1' max='10'></td>
		  <td class='itotal'></td>
		  <td>
		     <form action='manage_cart.php' method='post'>
		      <button name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
		     </form>
		  </td>
		  </tr>";
	  }
  }
  ?> 
  </tbody>
</table>
			  </div>
			 <div class="col-lg-9">
               <div class="border bg-light rounded p-4">			 
			    <h4>Total:</h4>
			    <h5 class="text bg-light " > <?php echo $total ?></h5>
				<br>
				<form>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    
  </div>
</div>
				</form>
			   </div>
			 </div>
			  
		 </div>  	  
	      
	  </div>
  </div>


</body>
</html> 