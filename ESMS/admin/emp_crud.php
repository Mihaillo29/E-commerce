<?php  
$insert = false;
$update = false;
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
  $sql = "DELETE FROM employee WHERE id = $id". mysqli_error($conn);
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['idEdit'])){
  // Update the record
    $id = $_POST["idEdit"];
    $name = $_POST["nameEdit"];
    $ph_no = $_POST["ph_noEdit"];
    $email = $_POST["emailEdit"]; 
	$address = $_POST["addressEdit"]; 
  // Sql query to be executed
  $sql = "UPDATE `employee` SET `name`='$name',`ph_no`='$ph_no',`email`='$email',`address`='$address' WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully---->". mysqli_error($conn);
}
}
else{
    
    $name = $_POST['name'];
    $ph_no = $_POST['ph_no'];
    $email = $_POST['email']; 
	$address = $_POST['address']; 
  // Sql query to be executed
  $sql = "INSERT INTO `employee`(`name`,`ph_no`,`email`,`address`) VALUES ('$name','$ph_no',' $email','$address')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>Add_employee</title>

</head>

<body>
 

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header"><form>
          <h5 class="modal-title" id="editModalLabel">Edit data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button></form>
        </div>
        <form action="emp_crud.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="idEdit" id="idEdit">
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" id="nameEdit" name="nameEdit" >
            </div>
			 <div class="form-group">
              <label for="title">Phone Number</label>
              <input type="integer" class="form-control" id="ph_noEdit" name="ph_noEdit" >
            </div>
			 <div class="form-group">
              <label for="title">Email</label>
              <input type="email" class="form-control" id="emailEdit" name="emailEdit">
            </div>
            <div class="form-group">
              <label for="desc">Address</label>
              <textarea class="form-control" id="addressEdit" name="addressEdit" rows="3"></textarea>
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
    <a class="navbar-brand" href="#"><img src="/crud/logo.svg" height="28px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="crud.php">Home </a>
        </li>
        
      </ul>
    </div>
  </nav>

  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong>  inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> record deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong>  updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <div class="container my-4">
    <h2>Add</h2>
    <form action="emp_crud.php" method="POST">
      <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
      </div>
	   <div class="form-group">
        <label for="title"> number</label>
        <input type=" number" class="form-control" id="number" name="ph_no" aria-describedby="emailHelp">
      </div>
	   <div class="form-group">
        <label for="title">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="desc">address</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">number</th>
		  <th scope="col">email</th>
		  <th scope="col">Address</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM employee";
          $result = mysqli_query($conn, $sql);
		   if ($result) {
          $id = 0;
          while($row = mysqli_fetch_assoc($result)){
            $id = $id + 1;
            echo "<tr>
            <th scope='row'>". $id . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['ph_no'] . "</td>
			<td>". $row['email'] . "</td>
			<td>". $row['address'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=".$row['id'].">Edit</button>
			<button class='delete btn btn-sm btn-primary' id=d".$row['id'].">Delete</button>  </td>
          </tr>";
		   } }
          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
       ph_no = tr.getElementsByTagName("td")[1].innerText;
		email = tr.getElementsByTagName("td")[2].innerText;
		address = tr.getElementsByTagName("td")[3].innerText;
        console.log(name, number, email,address);
        nameEdit.value = name;
        ph_noEdit.value = ph_no;
		emailEdit.value =email;
		addressEdit.value = address;
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

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `emp_crud.php?delete=${id}`;
         
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</body>

</html>

