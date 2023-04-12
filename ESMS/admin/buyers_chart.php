<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="esms_main";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
if(isset($_POST['remove'])){
 // $id = $_GET['delete'];
 // $remove = true;
//$sql = "DELETE FROM `user_cart_details` WHERE 'id'= $user_fetch['id'] ";
  //$result = mysqli_query($conn, $sql);
      echo "
	<script>
	alert(deleted !!!!!!!!);
	</script>
	";

}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- notifi bell -->
  <!-- Bootstrap CSS -->
  <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
 </script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>Customer_Orders</title>

</head>

<body>
<div>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="crud.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">BUYERS_CHART</a>
		<a class="nav-link" href="cus_query_crud.php">Customer_Query
		 <i class="fa fa-bell"  style='font-size:20px' aria-hidden="true" id="noti_number"></i>
		  </a>
		  <pre>     </pre><pre>             </pre><pre>                  <!-- uses pre tag for space   -->                                                                </pre>
        <a style="color:#eb096f" class="nav-link" href="logout.php">Logout</a>
        
      </div>
    </div>
  </div>
</nav>
</div>
<div class="col-lg-12 text-center border rounded bg-light my-5">
	          <h2>Customer Orders</h2>	
		</div>
<div class="container mt-5">
     <div class="row">
	     <div class="col-lg-12">
<table class="table text-center table-hover table-bordered  ">
  <thead>
    <tr>
      <th scope="col">Sr</th>
      <th scope="col">order_id</th>
      <th scope="col">CUS_Name</th>
      <th scope="col">Phone_no.</th>
	  <th scope="col">Address</th>
	  <th scope="col">Orders</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sr = 0 ; 
     $query= "SELECT * FROM `user_cart_details` " ;
	  $user_result= mysqli_query($conn,$query);
      while($user_fetch = mysqli_fetch_assoc($user_result)){
		  	   $sr = $sr+1 ;
			   echo"
			   <tr>
			       <td scope='row'>". $sr ."</td>
                   <td>".$user_fetch['id']."</td>
                   <td>".$user_fetch['name']."</td>
                   <td>".$user_fetch['number']."</td>
	               <td>".$user_fetch['address']."</td>
			       <td>
			          <table class='table text-center table-success table-bordered'>
                         <thead>
                           <tr>
                            <th scope='col'>Description</th>
                            <th scope='col'>Price</th>
	                        <th scope='col'>Quantity</th>
                          </tr>
                       </thead>
                       <tbody>
		                 <tr>
			            	<td>".$user_fetch['description']."</td>
			            	<td>".$user_fetch['price']."</td>
			            	<td>".$user_fetch['Quantity']."</td>
                        </tr>
			         </tbody>
                   </table>
	              </td>
			   <td>
               <form  action='' method='POST'  >
			   <button class='btn btn-sm btn-outline-danger' name='remove' >Delivered</button>
			   </form>			   
			</td>
            </tr>
			   
			   ";

	  }
  ?>
  
<?php
 
  ?>
  
  
  </tbody>
  </table>

		 </div>
	 </div>
  </div>
</body>
</html>