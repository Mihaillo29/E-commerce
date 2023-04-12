 
<!-- has inline css-->
<?php
 $servername = "localhost";
 $username="root";
 $password="";
 $dbname="esms_main";
 try{
	  $conn = mysqli_connect($servername,
	  $username,$password,$dbname);
	// echo("successful in connection");
	  }catch(mysql_sql_Exception $ex){
		//  echo("error in connection");
	  }
	  if(isset($_POST['submit'])){
		  $name=$_POST['name'];
		  $address=$_POST['address'];
 		  $number=$_POST['ph_no']; //error
	 	  $email=$_POST['email'];
		  $password=$_POST['password'];  //error
	$register_query = "INSERT INTO `customers`(`name`,
	 `number`,`email`, `address`,  `password`) VALUES ('$name',
	'$ph_no','$email','$address','$password')";
	try{
		$register_result = mysqli_query($conn,$register_query);
		if($register_result){
			if(mysqli_affected_rows($conn)>0){
			echo("registration successful");	
			}else{
				echo("error in registration");
			}
			}
		}catch(Exception $ex){
			echo("error".$ex->getmessage());
		}
	}
	
 ?> 
 <!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Registration form</title>

</head>

<body style=" background-color:rgb(207, 218, 255);;
 background-size: 280%;
	  background-position: -400px 0px;"   >        
	     

<div style="
		width:400px;
		margin:100px auto 0px auto;">
	
	<div style="background-color:rgba(0,0,0,0.5);
		width:100%;
		font-size: 18px;
		border-radius:10px;
		border: 1px solid rgba(255,255,255,0.3);
		box-shadow:2px 2px 15px rgba(0,0,0,0.3);
		color:#fff;">
		
<h2 style="text-aling: center;
		padding: 20 px;
	font-family: sans-sarif;">Register here</h2>

<form style="margin: 30px;" action="" method="post">
 
 <label style="font-family:sans-sarif;
		 font-size:18px;
		 font-style:italic;"> your name: <label/><span style="color:red">*</span>
  <br>
 <input style= "width: 300px;
		  border : 1px solid #ddd;
		  border-radius :3px;
		  outline: 0;
		  padding: 7px;
		  background-color: #fff;
		  box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3); " 
		  type="text" name="name" id= "name" placeholder="enter youe name" required>
 <br><br>
 <!--  1 -->
  <label style="font-family:sans-sarif;
		 font-size:18px;
		 font-style:italic;"> Phone number: <label/><span style="color:red">*</span>
  <br>
 <input style= "width: 300px;
		  border : 1px solid #ddd;
		  border-radius :3px;
		  outline: 0;
		  padding: 7px;
		  background-color: #fff;
		  box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3); " 
		  type="tel" name="number"  placeholder="enter youe phone number" maxlength="10" required>
 <br><br>
  <!--  2 -->
  <label style="font-family:sans-sarif;
		 font-size:18px;
		 font-style:italic;"> email: <label><span style="color:red">*</span>
  <br>
 <input style= "width: 300px;
		  border : 1px solid #ddd;
		  border-radius :3px;
		  outline: 0;
		  padding: 7px;
		  background-color: #fff;
		  box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3); " 
		  type="email" name="email" id= "email" placeholder="enter youe email" required>
 <br><br>
  <!--  3 -->
  <label style="font-family:sans-sarif;
		 font-size:18px;
		 font-style:italic;"> your Address: <label/><span style="color:red">*</span>
  <br>
 <input style= "width: 300px;
		  border : 1px solid #ddd;
		  border-radius :3px;
		  outline: 0;
		  padding: 7px;
		  background-color: #fff;
		  box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3); " 
		  type="text" name="address" id= "address" placeholder="enter youe address" required>
 <br><br>
  <!--  4 -->
  <label style="font-family:sans-sarif;
		 font-size:18px;
		 font-style:italic;"> Password(create one) <label/><span style="color:red">*</span>
  <br>
 <input style= "width: 300px;
		  border : 1px solid #ddd;
		  border-radius :3px;
		  outline: 0;
		  padding: 7px;
		  background-color: #fff;
		  box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3); " 
		  type="password" name="password" id= "password" placeholder="enter youe password" required>
 <br><br> 
  
  <button style="width:200px;
		 padding:7px;
		 font-size:16px;
		font-family:sans-sarif;
		font-weight: 600;
		border:none;
		border-radius: 3px;
		background-color: rgba(250,100,0,0.8);
		color: #fff;
		cursor: pointer;
		border: 1px solid rgba(255,255,255,0.5);
		box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
		margin-bottom:20px;" 
  type="submit" value="submit" name= "submit" id="submit" onclick="show_id()">submit</button>
  
</form>	
<script>
function show_id(){
	alert('your cutomer id is:  '.$id.'  please remember..');

}


</script>
</div>	
</div>
</body>
</html>
 