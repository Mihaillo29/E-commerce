<!--dont have css, bootstrap used  -->
<?php  // 1st crud page...!!!!
$insert = false;
$update = false;                                                   // connection code.
$delete = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "esms_main";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database); 
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM customers WHERE id = $id". mysqli_error($conn);
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['idEdit'])){
  // Update the record
  $id = $_POST["idEdit"];
    $name = $_POST["nameEdit"];
    $number = $_POST["numberEdit"];
	$email = $_POST["emailEdit"];
	$address = $_POST["addressEdit"];
    $password = $_POST["passwordEdit"];
  // Sql query to be executed
  $sql = "UPDATE `customers` SET `name`='$name',`number`='$number',`email`='$email',`address`='$address',`password`='$password' WHERE id='$id' ";
  $result = mysqli_query($conn, $sql); //....
  if($result){
    $update = true;
	
}
else{
    echo "We could not update the record successfully". mysqli_error($conn);
}
}
else{
    $email = $_POST["email"];
	$address = $_POST["address"];
	$password = $_POST["password"];
    $name = $_POST["name"];
    $number = $_POST["number"];
    //  Sql query to be executed
 $sql = "INSERT INTO customers (name, number, email,address,password) VALUES ('$name', '$number', '$email','$address','$password')";
   $result =  mysqli_query($conn, $sql); //.....

   
  if($result){ 
      $insert = true;
	     
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?> <?php include('notifi.php');?>  <!-- connection code ends here-->

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- notifi bell -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>ADMIN'S PANEL</title>

</head>

<body>
 
     <!-- from here delete the code -->
  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit customer data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="crud.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="idEdit" id="idEdit">
            <div class="form-group">
              <label for="name">name</label>
              <input type="text" class="form-control" id="nameEdit" name="nameEdit">
            </div>
			<div class="form-group">
              <label for="number">phone_number</label><span style="color:red">*</span>
              <input type="tel" class="form-control" id="numberEdit" name=" numberEdit"  >
            </div>
			<div class="form-group">
              <label for="email">email</label>
              <input type="email" class="form-control" id="emailEdit" name="emailEdit">
            </div>
			<div class="form-group">
              <label for="address">address</label>
              <textarea class="form-control" id="addressEdit" name="addressEdit" rows="3" ></textarea>
            </div> 
			<div class="form-group">
              <label for="email">password</label>
              <input type="password" class="form-control" id="passwordEdit" name="passwordEdit" >
            </div>
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">customers <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mobile.php">products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buyers_chart.php">buychart</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="emp_crud.php">Employee</a>
        </li>

       <li class="nav-item">
          <a class="nav-link" href="cus_query_crud.php">Customer_Query
		 <i class="fa fa-bell"  style='font-size:20px' aria-hidden="true" id="noti_number"></i>
		  </a> 
        </li>
        
		  <!--   here   -->
		<pre>     </pre><pre>             </pre><pre>                                  </pre>
		<li class="nav-item">
		   <a style="color:#eb096f" class="nav-link" href="logout.php">Logout</a>
		 </li>
      </ul>
    <!--  <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>

  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong>data deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong>data updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";  
  }
  ?> <!-- uptill here.... and  -->
  <div class="container my-3">  <!--  required code -->
    <h2>Add customers</h2>
    <form action="crud.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">customer name</label><span style="color:red">*</span>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
	   <div class="form-group">
        <label for="name">phone_number</label><span style="color:red">*</span>
        <input type="tel" class="form-control" id="number" name="number">
      </div>
	   <div class="form-group">
        <label for="name">email</label>
		<input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="address">address</label>
        <textarea class="form-control" id="address" name="address" rows="3"  required></textarea>
      </div>
	   <div class="form-group">
        <label for="address">password</label>
          <input type="password" class="form-control" id="password" name="password" required>
      </div>
	  <button type="submit" class="btn btn-primary">Add </button>
    </form>
  </div>

  <div class="container my-4">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Phone_number</th>
          <th scope="col">Email</th>
		  <th scope="col">Address</th>
		  <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM customers";
          $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		 if ($result) {
         $id = 0;
          while($row = mysqli_fetch_array($result)){      //error 
            $id = $id + 1;
            echo "<tr>
			<th scope='row'>". $id . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['number'] . "</td>
			<td>". $row['email'] . "</td>
			<td>". $row['address'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=".$row['id'].">Edit</button> 
			<button class='delete btn btn-sm btn-primary' id=d".$row['id'].">Delete</button>  </td>
          </tr>";
		  }
		  }
        ?>
     </tbody>
    </table>
  </div>
  <hr> <!--check if the jquery is needed or not   -->
  <!-- Optional JavaScript -->   
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->   <!-- i get this java query from bootstrap if you want to check i will send you the link-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        
		tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        number = tr.getElementsByTagName("td")[1].innerText;
		email = tr.getElementsByTagName("td")[2].innerText;
		address = tr.getElementsByTagName("td")[3].innerText;
        console.log(name, number, email, address);
       
   	    nameEdit.value = name;
        numberEdit.value = number;
	   emailEdit.value =email;
	    addressEdit.value = address;
		passwordEdit.value = password;
        idEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        id = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete")) {
          console.log("yes");
          window.location = `crud.php?delete=${id}`;
         
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</body>

</html>
