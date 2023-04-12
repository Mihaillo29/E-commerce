<?php    //crud for customer query....!!!!
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
  $sql = "DELETE FROM `query` WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);
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
 <!---<style>button{
	background-color: red;
	color: #fff;
}</style>-->

<title>Cus_Queries</title>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
	  <li class="nav-item">
          <a class="nav-link" href="crud.php" style="color:white;">HOME</a>
        </li>
		
        <li class="nav-item active">
          <a class="nav-link" href="cus_query_crud.php" style="color:#81f0c9;">Customer Query<span class="sr-only">(current)</span></a>
        </li>
      </ul>

    </div>
  </nav>






  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
		  <th scope="col">Query</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `query`";
          $result = mysqli_query($conn, $sql);
		   if ($result) {
          $id = 0;
          while($row = mysqli_fetch_assoc($result)){
            $id = $id + 1;
            echo "<tr>
            <th scope='row'>". $id . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['email'] . "</td>
			<td>". $row['query'] . "</td>
            <td>
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

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        id = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this customer query??? please conform that the query has been resolve!")) {
          console.log("yes");
          window.location = `cus_query_crud.php?delete=${id}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
  <script>
  document.getelementByid('change').onclick = changecolor;
  function changecolor(){
	  document.body.style.color = "green";
	  return false;
  }
</script>
</body>

</html>