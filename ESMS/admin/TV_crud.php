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
  $sql = "DELETE FROM `tv` WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['idEdit'])){
  // Update the record
    $id = $_POST["idEdit"];
    $image = $_POST["imageEdit"];
    $description = $_POST["descriptionEdit"];
    $price = $_POST["priceEdit"];
  // Sql query to be executed
  $sql = "UPDATE `tv` SET `id` = '$id' , `image` = '$image'  , `description` = '$description'  , `price` = '$price' WHERE`id` = $id";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully". mysqli_error($conn);
}
}
else{
	//$id = $_POST["id"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $price = $_POST["price"];
  // Sql query to be executed
  $sql = "INSERT INTO `tv` (`image`, `description` , `price`) VALUES ('$image', '$description' , '$price')";
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


  <title>TV's</title>

</head>

<body>
 

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="TV_crud.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="idEdit" id="idEdit">
            <div class="form-group">
              <label for="title"> image</label>
              <input type="text" class="form-control" id="imageEdit" name="imageEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc"> Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3" ></textarea>
            </div> 
			  <div class="form-group">
              <label for="desc"> price</label>
              <input type="int" class="form-control" id="priceEdit" name="priceEdit" aria-describedby="emailHelp">
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
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
	  <li class="nav-item">
          <a class="nav-link" href="crud.php" style="color:white;">HOME</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="mobile.php" style="color:white;">BACK</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="TV_crud.php" style="color:#81f0c9;">TV<span class="sr-only">(current)</span></a>
        </li>
      </ul>

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
    <strong>Success!</strong> deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong>updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <div class="container my-4">
    <h3>Add PRODUCTS</h3>
    <form action="TV_crud.php" method="POST">
      <div class="form-group">
        <label for="title"> Image</label><span style="color:red"></span>
        <input type="text" class="form-control" id="image" name="image" aria-describedby="emailHelp" >
      </div>

      <div class="form-group">
        <label for="desc"> Description</label><span style="color:red">*</span>
       <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" required >
      </div>
	   <div class="form-group">
        <label for="desc"> Price</label>
        <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Add </button>
    </form>
  </div>

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Image</th>
          <th scope="col">Description</th>
		  <th scope="col">Price</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `tv`";
          $result = mysqli_query($conn, $sql);
		   if ($result) {
          $id = 0;
          while($row = mysqli_fetch_assoc($result)){
            $id = $id + 1;
            echo "<tr>
            <th scope='row'>". $id . "</th>
            <td>". $row['image'] . "</td>
            <td>". $row['description'] . "</td>
			<td>". $row['price'] . "</td>
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
        image = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
	   price = tr.getElementsByTagName("td")[2].innerText;
        console.log(image, description, price);
        imageEdit.value = image;
        descriptionEdit.value = description;
		priceEdit.value = price;
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
          window.location = `TV_crud.php?delete=${id}`;
         
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</body>

</html>