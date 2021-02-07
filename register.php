<!--Include Header-->
<?php require './header.php'; ?>
<section class="container login-container">
	<h2 class="login-title">S'inscrire</h2>
	
	<form class="login-form" method="post" action="validerinscription.php">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Prénom</label>
			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom" required>
	 	 </div>
	  	<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Nom</label>
			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" required>
	  	</div>
		  <!-- on vérifie l'erreur sur le pseudo -->
		<?php
		if(isset($_GET['erreur']) AND $_GET['erreur']==0){?>
			<div class="mb-3">
				<h6 class="text-danger">Ce pseudo est déjà utilisé, choisissez un autre</h6>
			</div>
		<?php
			}
		?>
		<div class="mb-3">
			<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Pseudo</label>
			<input type="text" class="form-control" id="exampleInputPassword1" name="pseudo" required>
		</div>
		<?php
		if(isset($_GET['erreur']) AND $_GET['erreur']==1){?>
			<div class="mb-3">
				<h6 class="text-danger">Les mot de passes ne correspondent pas</h6>
			</div>
		<?php
			}
		?>	  
		<div class="mb-3">
			<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Mot de passe</label>
			<input type="password" class="form-control" id="exampleInputPassword1" name="mp1" required>
		</div>
		<div class="mb-3">
			<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Confirmer le mot de passe</label>
			<input type="password" class="form-control" id="exampleInputPassword1" name="mp2" required>
		</div>
	  <button type="submit" class="btn btn-submit btn-info" name="forminscription">Soumettre</button>
	</form>	
</section>