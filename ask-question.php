<!--Include Header-->
<?php
session_start();
if(isset($_SESSION['id_apprenant'])){?>

	<?php require './header.php'; ?>
	<!DOCTYPE html>
	<html lang="fr">
	<head>
	<meta charset="utf-8">
	<title>StackOverFlow Clone</title>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
	<script src="https://cdn.quilljs.com/1.1.6/quill.js"></script>
	<!-- <script src="./style/bootstrap/js/bootstrap.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="question container">
		<div class="ql-editor"></div>
			<div class="Title">	
				<h2 class="mb-4 mt-4">Poser une question</h2>
			</div>	
			<!-- Create the editor container -->
			<form class="login-form" action="" method="post">
				<h4>Titre</h4>
				<div class="mb-3">
					<label for="title-post" class="form-label">Soyez précis et imaginez que vous posez une question à une autre personne.</label>
					<input type="text" class="form-control" id="title-post" name="nomquestion">
				</div>  				  
				<h4>Corps</h4>
				<label for="body-post" class="form-label">Incluez toutes les informations dont une personne aurait besoin pour répondre à votre question.</label>
				<div class="mb-3">
				<input type="hidden" name="post-body" class="form-control" id="body-post">
				</div>
				<div id="editor">
				</div>
				<h4 class="mt-4">Thèmes</h4>
				<div class="mb-3">
					<label for="tag-post" class="form-label">Ajoutez jusqu'à 5 tags pour décrire le sujet de votre question.</label>
					<!-- <input type="text" class="form-control" id="tag-post"> -->
					<select class="js-example-tags form-control" multiple="multiple" id="tag-post">
					</select>
				</div> 
				<button type="submit" class="btn btn-post btn-info mb-5" name="formquestion">Posez votre question</button>
			</form>
		</div>
		
		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
		<script src="./script/script.js"></script>
		<!--Include Footer-->
		<?php require './footer.php';?>
	</body>
	</html>
	<?php
}else{
	header('Location:login.php');
}
?>

