<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "esms_main";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
<!doctype html>
<html>
<head>
<title>test image</title>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head/>
<body> 
<form action="" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
<input type="submit" name="submit2" value="display">
</form>
</body>
</html>
<?php
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert ="INSERT INTO test (image) VALUES ('$imgContent')" OR DIE(mysqli_error()); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 //

// Get image data from database 
$result ="SELECT image  FROM test where id=1"; 
$queryfire=mysqli_query($conn,$result) OR DIE(mysqli_error());
$num = mysqli_num_rows($queryfire);
 if($num>0){ 
  echo"  <div >"; 
         while($img= mysqli_fetch_assoc($queryfire)){ 
		 header("Content-type: image/jpg"); 

echo $img['image'];
       //    echo" <img src='data:image/jpg;charset=utf8;base64";echo base64_encode($row['image'])." ' > ";
         }  
    echo" </div>"; 
 }



echo'<td><input type="submit" name="id" value="delete"></td></tr></table>';
if(isset($_GET["id"]))
{    $sql= "delete from test where id=$id";                                                                                 //delete
	mysqli_query($conn, $sql);
}
?>