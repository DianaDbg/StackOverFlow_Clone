<!--Include Header-->
<?php require './header.php'; ?>
<section class="container login-container">
	<h2 class="login-title">S'inscrire</h2>
	<form class="login-form" method="post" action="validerinscription.php">
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Nom</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
	  </div>
	  <div class="mb-3">
	  	<div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Pseudo</label>
	    <input type="text" class="form-control" id="exampleInputPassword1" name="pseudo">
	  </div>	  
	  <div class="mb-3">
	  	<div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="mp1">
	  </div>
	  <div class="mb-3">
	  	<div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Confirmer le mot de passe</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="mp2">
	  </div>
	  <button type="submit" class="btn btn-submit btn-info" name="forminscription">Soumettre</button>
	</form>	
</section>