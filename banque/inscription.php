<?php 
 include('db.php');
 if(isset($_POST['enregistrer'])){


   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];

   $date_expiration=$_POST['date_expiration'];
   $cvv=$_POST['cvv'];
   $mdp=$_POST['mdp'];
   $numero_bancaire=$_POST['numero_bancaire'];
   $encrypt=sha1($mdp);
  
  
  $req="INSERT INTO client(nom ,prenom,numero_bancaire,cvv,	date_expiration,password) VALUES(?,?,?,?,?,?)";
  $execute=$pdo->prepare($req);
 $stm= $execute->execute([$nom,$prenom,$numero_bancaire,$cvv,$date_expiration,$encrypt]);
 echo "<center>inscription effectué avec success !</center>";
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
	<form action="" method="post">
       <div class="container-fluid">
       	  <div class="p-4  mx-auto shadow rounded" style="width:100%; max-width:340px; margin-top: 50px;">
      
       	  	<img src="assets/images/t.png" class=" =  rounded-circle mx-auto d-block" style="width: 140px;">
       	  	<h3>creation de compte</h3>
       	  	 <input type="text" class="my-2 form-control" placeholder="nom" name="nom">
       	  	 <input type="text" class="my-2 form-control" placeholder="prenom" name="prenom">
				  <input type="number" class="my-2 form-control" placeholder="numero bancaire" name="numero_bancaire">
				  <input type="number" class="my-2 form-control" placeholder="cvv" name="cvv">
       	  	 <input type="date" class="my-2 form-control" placeholder="date d'expiration" name="date_expiration">
				
				  <input type="password" class="my-2 form-control" placeholder="mot de passe" name="mdp">
       	   
       	  	 <button class=" btn btn-primary" type="submit" name="enregistrer">enregistrer</button>
       	  	 <button class=" btn btn-danger float-end text-white" type="reset">Annuler</button>
				  <p>avez-vous déjà un compte?<a href="login.php">se connecter</a></p>
       	  </div>
		
       </div>
	   </form>
	   <script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html> 