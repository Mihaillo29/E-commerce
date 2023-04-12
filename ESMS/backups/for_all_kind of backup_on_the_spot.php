<?php
   include('config.php');
//session_start();
//session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST")
{ echo"here";
	if(ISSET($_POST['add_to_cart'])) //add item
	{     //MOBILE CART CODE STARTS HERE...
	      $description = $_POST["description"];
          $price = $_POST["price"];
		   $sql = "SELECT * FROM mobiles ( `description` , `price`) VALUES ( '$description' , '$price')";
		   $result = mysqli_query($conn, $sql). mysqli_error($conn);
		if(isset($_SESSION['cart']))
		{
		$myitems=array_column($_SESSION['cart'],'$description');
		if(in_array($_POST['description'],$myitems))
		{   //window.location.href='lava.php';
			echo"<script>
			alert('item already added');
			
			</script>";
		}
		else{
			// window.location.href='lava.php';
		$count=count($_SESSION['cart']);
		$_SESSION['cart'][$count]=array('description'=>$_POST['description'], 'price'=>$_POST['price'],'Quantity'=>1);
		print_r($_SESSION['cart']); //NO NEED
		echo"<script> 
		  alert('item added');
		 
		  </script>";
	        }
	    }
	else{/* window.location.href='lava.php';*/
		$_SESSION['cart'][0]=array('description'=>$_POST['description'], 'price'=>$_POST['price'],'Quantity'=>1);
		print_r($_SESSION['cart']); //NO NEED
		echo"<script> 
		  alert('item added');
		 
		  </script>";
	    }
    }
}
if(isset($_POST['remove_item'])) //remove item
{
	foreach($_SESSION['cart']as $key =>$value)
	{
		if($value['description']==$_POST['description'])
		{
			unset($_SESSION['cart'][$key]);
			$_SESSION['cart']=array_value($_SESSION['cart']);
			echo"<script>
			alert('item removed');
			window.location.href='mycart.php';
			</script>";
		}
	}
}
?>     //another method
		if(isset($_SESSION['cart']))
		{
			$session_array_id= array_column($_SESSION['cart'],"id");
			
			if(!in_array($_GET['id'],$session_array_id)){
		    $session_array=array(
			'id' => $_GET['id'],
			"description" => $_POST['description'],
			"price" => $_POST['price'],
			);
			$_SESSION['cart'][]=$session_array;
			
			var_dump($_SESSION['cart']). mysqli_error($conn);	
			}
			
		}
		else{
			$session_array=array(
			'id' => $_GET['id'],
			"description" => $_POST['description'],
			"price" => $_POST['price'],
			);
			$_SESSION['cart'][]=$session_array;
		}