<?php 
include('db.php');

session_start();
 


     if (isset($_POST['login'])) {
          $err=[];
        if (empty($_POST['nom'])) {

      $err['username']="veillez entrez votre nom";
    }
         if (empty($_POST['password'])) {
      $err['password']="veillez entrez votre motde passe";
    }else{
      $nom=$_POST['nom'];    
       
      $password=$_POST['password'];
      $mpd=sha1($password);


      $requser=$pdo->prepare("SELECT * FROM client WHERE nom=? AND password=?");
      $requser->execute([$nom,$mpd]);
      $userexist= $requser->rowCount();
      if ($userexist ==1) {
          $userinfo= $requser->fetch();
          $_SESSION['id']=$userinfo['id'];
          $_SESSION['nom']=$userinfo['nom'];
          $_SESSION['password']=$userinfo['password'];
         
          header("location:index.php");


      }
      else{
        $err[]="login ou mot de passe incorrect";
      }
    }

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="assets/bootstrap.min.css">
     <link rel="stylesheet" href="assets/all.min.css">
	<title>Home</title>
</head>
<body>
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
<?php if(!empty($err)): ?>
          <center>
          <div class="alert alert-danger">
         
           <ul>
            <?php foreach($err as $errs): ?> 
              <div class="alert alert-danger"><?=$errs;?></div>
            <?php endforeach;?>
           </ul>
           </div>
           </center>
         <?php endif; ?>
		 <form action="" method="post">
	<div style="min-width:350px;">
       <div class="container-fluid">
       	  <div class="p-4  mx-auto shadow rounded" style="width:100%; max-width:340px; margin-top: 50px;">
       	
       	  	<img src="assets/images/ca.png" class=" =  rounded-circle mx-auto d-block" style="width: 140px;">
       	  	<h3>connexion</h3>
       	  	 <input type="nom" class="form-control" placeholder="nom" name="nom">
       	  	 <br>
       	  	 <input type="password" class="form-control" placeholder="password" name="password">

       	  	 <br>
       	  	 <button class=" btn btn-primary" type="submit" name="login">se connecter </i></button>
              <p>vous n'avez pas de compte?<a href="inscription.php">cree un compte</a></p>
       	  </div>
       </div>
	   </div>
	   </form>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html> 
