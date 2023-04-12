<?php
include('header.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['add_to_cart'])){
	if(isset($_SESSION['cart']))
	{    
		$session_array_id= array_column($_SESSION['cart'],"id");
		
		if(!in_array($_GET['id'],$session_array_id)){
			$session_array= array(
		    'id' => $_GET['id'],
		    "description" => $_POST['description'],
		    "price"=> $_POST['price'],
			"Quantity" =>$_POST['Quantity']
		    );
			$_SESSION['cart'][]=$session_array;
			echo '<script>alert("Item  Added")</script>';  
            echo '<script>window.location="lava.php"</script>'; 
		}
	
	}
	else{
		$session_array= array(
		'id' => $_GET['id'],
		"description" => $_POST['description'],
		"price"=> $_POST['price'],
		"Quantity" =>$_POST['Quantity']
		);
		$_SESSION['cart'][] = $session_array;
		echo '<script>alert("Item  Added")</script>';  
        echo '<script>window.location="lava.php"</script>'; 
	}

}

if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["cart"] as $key => $value)  
           {  
                if($value["id"] == $_GET["id"])  
                {  
                     unset($_SESSION["cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }
  if(isset($_POST['go'])){ 
     $name	= $_SESSION['name'];
	 $number = $_SESSION['number'];
	 $address = $_SESSION['address'];
//$description = $value["description"];
	// $price = $value["price"];
	/*$query1="INSERT INTO `user_cart_details`(`name`, `number`, `address`, `description`, `price`)
            	 VALUES ('$name','$number','$address','$description','$price')";*/
			$order_id= $_SESSION['id']; //fetching cusrtomer id
			$name	= $_SESSION['name'];
			$number = $_SESSION['number'];
	        $address = $_SESSION['address'];
             $query= "INSERT INTO `user_cart_details`(`id`,`name`,`number`,`address`, `description`, `price`, `Quantity`) VALUES (?,?,?,?,?,?,?) ";			
			//echo"$name, $number, $address, $description,  $price";
            $stmt= mysqli_prepare($con,$query);
		if($stmt){
			mysqli_stmt_bind_param($stmt,"isissii",$order_id,$name,$number,$address,$description,$price,$quantity);
			foreach($_SESSION['cart'] as $key => $value){
				$description = $value['description'];
				$price = $value['price'];
				$quantity= $value['Quantity'];
				mysqli_stmt_execute($stmt);
			}
			unset($_SESSION['cart']);
			 echo"<script>
	             alert('order palced');
	             window.location.href='cart.php';
	             </script>";
			
		}else{
				 echo"<script>
	             alert('SQL query prepare error');
	             window.location.href='cart.php';
	             </script>";
			
		}
 
 }
 /*else{
	 echo"<script>
	 alert('SQL error');
	 window.location.href='cart.php';
	 </script>";
 }*/
 
 
 
 
}//var_dump($_SESSION['cart']);

 ?> 




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CART</title>
</head>
<body> <form action="" method="POST">
<div class="container">
      <div class="row">
         <div class="col-lg-12 text-center border rounded bg-light my-5">
	          <h2>MY CART</h2>	
		</div>
		
		<div class="col-lg-8 ">
		<table class="table table-bordered table-hover table-responsive">  
                          <tr class="text-center" >  
                               <th width="40%">Item Name</th>  
							   <th width="20%">Price</th>
                               <th width="10%">Quantity</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["cart"] as $key => $value)  
                               {  
                          ?>  
                          <tr>  
                               <td class="text-center"><?php echo $value["description"]; ?></td>  
							    <td class="text-center"> &#8377 <?php echo $value["price"]; ?>/-</td> 
                               <td class="text-center" ><?php echo $value["Quantity"]; ?></td>   
                               <td class="text-center"> &#8377 <?php echo number_format($value["Quantity"] * $value["price"], 2); ?>/-</td>  
                               <td><a href="cart.php?action=remove&id=<?php $value["id"]; ?>">
							   
		                       <button class="btn btn-sm btn-outline-danger" > REMOVE </button>
		                         
	                              </a></td> 
               								  
                         </tr>  
                          <?php  
                                    $total = $total + ($value["Quantity"] * $value["price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right" ><b>GRAND TOTAL</b></td>  
                               <td align="right"><b> &#8377 <?php echo number_format($total, 2); ?>/-</b></td>  
                               <td><a href="cart.php?action=clearall">
							  
		                       <button class="btn btn-sm btn-outline-warning" > Clear All </button>
		                         
	                              </a></td> 
                          </tr>  
                          <?php  
                          }  
						  if(isset($_GET['action'])){
							  if($_GET['action']=="clearall"){
								  unset($_SESSION['cart']);
							  }
							  if($_GET['action']=="remove"){
								  foreach($_SESSION['cart'] as $key => $value){
									  if($value['id']==$_GET['id']){
										unset($_SESSION['cart']['key']);  
									  }
									  
								  }
							  }
							  
						  }
                          ?>				
                     </table> 
		</div>
  </div>
  
</div>
                      <!-- table for customer info to comformation    -->
					  <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center border rounded bg-light my-5">
	          <h2>MY DATA</h2>	
		</div>
<div class="col-lg-8 " >
  <table class="table table-hover table-responsive">  
                          <tr class="text-center" >  
						       <th width="5%">CUSTOMER_ID</th>
                               <th width="10%"> Name</th> 
                               <th width="40%">Address</th>  
                               <th width="15%">Phone number</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                           
                          <tr><td class="text-center"><?php echo $_SESSION['id'];  ?></td>  
                               <td class="text-center"><?php echo $_SESSION['name'];  ?></td>  
                               <td class="text-center" ><?php echo $_SESSION['address']; ?></td>   
                               <td class="text-center"><?php echo $_SESSION['number']; ?></td>  
                               <td>
							   
		                       <button class="btn btn-sm btn-outline-success" name="go"> CONFIRM </button>
		                       </td>  
                         </tr>    
                     </table> 


<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
  <label class="form-check-label" for="flexCheckDefault">
    CASH ON DELIVERY
  </label>
</div>
		
		</div>

 </form>
</body>
</html>