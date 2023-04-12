 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 <!-- navbar  -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <h4 style="color:#91dee3;"><div>sheetal electronics</div></h4>
  <?php // echo "<h4 style='color:white' >   Welcome " . $_SESSION['name'] .     "</h4>"; ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="welcome.php" style="color:white;" > HOME</a>
      </li>
	  <li class="nav-item ">
          <a class="nav-link" href="lava.php" style="color:white;">Mobile<a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fridge.php"  style="color:white;">Fridge</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="WM.php" style="color:white;">Washing_Machine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AC.php" style="color:white;">AC</a>
        </li>
		        <li class="nav-item">
          <a class="nav-link" href="TV.php" style="color:white;">TV</a>
        </li>
		        <li class="nav-item">
          <a class="nav-link" href="HT.php" style="color:white;">HomeTheater</a>
        </li>
	  
      <div class="navbar-brand" style=" color: white;
  text-shadow: 2px 2px 4px #eda69d;"> SHEETAL ELECTRONICS<BR>Contact Us : 9324******<br>
  <a href="logout.php" style="color: white" >Logout</a></div>
  </div>
    </ul>
  </div>
</nav>