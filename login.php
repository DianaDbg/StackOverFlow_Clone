<!--Include Header-->
<?php require './header.php'; ?>
<section class="container login-container">
	<h2 class="login-title">Connexion</h2>
	<form class="login-form" method="post" action="validerconnexion.php">
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pseudo">
	  </div>
	  <div class="mb-3">
	  	<div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
	  </div>
	  <button type="submit" class="btn btn-submit btn-info" name="formconnexion">Soumettre</button>
	  <div id="emailHelp" class="form-text">Vous n'avez pas de compte ? <a href="./register.php">S'inscrire</a></div>
	</form>	
</section>