<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="assets/bootstrap.min.css">
     <link rel="stylesheet" href="assets/all.min.css">
	<title>Home</title>
</head>
<body background="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">socité general</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">connexion</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
	<div style="min-width:350px;">
       <div class="container-fluid">
       	  <div class="p-4  mx-auto shadow rounded" style="width:100%; max-width:340px; margin-top: 50px;">
       	  	<h2 class="text-capitalize text-center ">gestion enployés</h2>
                 <hr>
       	  
       	  	<h5>SOCIETE GENERAL </h5>
       	  
       	  	 <br>
                  <br>
       	    

       	  	 <br>
                  <hr>
                 
				  <?php 
    session_start();
    if (empty($_SESSION['nom'])) {
        $nom=$_SESSION['nom'];
      
 header("location:login.php");

}
?>
       	  </div>
       </div>
	   </div>
	<script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html> 
