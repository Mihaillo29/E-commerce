<?php
session_start();
//session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(ISSET($_POST['add_to_cart'])) //add item
	{
		if(isset($_SESSION['cart']))
		{
		$myitems=array_column($_SESSION['cart'],'description');
		if(in_array($_POST['description'],$myitems))
		{
			echo"<script>
			alert('item already added');
			window.location.href='lava.php';
			</script>";
		}
		else{
		$count=count($_SESSION['cart']);
		$_SESSION['cart'][$count]=array('description'=>$_POST['description'], 'price'=>$_POST['price'],'Quantity'=>1);
		print_r($_SESSION['cart']); //NO NEED
		echo"<script> 
		  alert('item added');
		  window.location.href='lava.php';
		  </script>";
	        }
	    }
	else{
		$_SESSION['cart'][0]=array('description'=>$_POST['description'], 'price'=>$_POST['price'],'Quantity'=>1);
		print_r($_SESSION['cart']); //NO NEED
		echo"<script> 
		  alert('item added');
		  window.location.href='lava.php';
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
?>