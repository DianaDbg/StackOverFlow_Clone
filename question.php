<?php 
//Include Header
require './header.php'; 

$bdd = new PDO('mysql:host=localhost;dbname=stackoverflow;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

//Recupération des questions depuis la base de données
$query = $bdd->query("SELECT * FROM questions WHERE numquestion = 1");
$Titre = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>StackOverFlow Clone</title>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
  <script src="https://cdn.quilljs.com/1.1.6/quill.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet"/>
</head>
<body>
	<div class="container">
		<div class="question container">
			<div class="question-header">	
				<div class="Title">	
					<h3><?php foreach($Titre as $titre) { echo $titre['titre']; } ?></h3>
				</div>			
				<div class="btn ask">	
					<form>	
						<button class="btn btn-info"><a href="ask-question.php">Poser une question</a></button>
					</form>
				</div>
			</div>
			<?php 
			foreach($questions as $question) 
			{ 
			?>
				<div class="question-summary container">
					<div class="statscontainer">
						<div class="stats">
							<div class="answers">

										<strong>0 Answers</strong>
										Answers
							</div>
						</div>
					</div>
					<div class="summary">
						<h3><a href=""><?php echo $question['titre']; ?></a></h3>
						<div class="excerpt"><?php partOfText($question['intitule'], $max) ?></div>
						<div class="tags">
							<a class="post-tag">java</a>
							<a class="post-tag">python</a>
							<a class="post-tag">css</a>
							<a class="post-tag">html</a>
							<a class="post-tag">graphql</a>
						</div>
					</div>
				</div>
			<?php 
			} ?>	
			<div class="question-summary container mb-5">
				<div class="">
					<div class="excerpt">
						<p>I have a list of locations and a dataframe like below and I want to select rows from a df with city and country columns where the location of the row (city and country) matches any of the pairs in
						where the location of the row (city and country) matches any of the pairs inwhere the location of the row (city and country) matches any of the pairs inwhere the location of the row (city and country) matches any of the pairs inwhere the location of the row (city and country) matches any of the pairs in </p>	
					</div>
					<div class="tagsuser">
						<div class="tags">
							<a class="post-tag">java</a>
							<a class="post-tag">python</a>
							<a class="post-tag">css</a>
							<a class="post-tag">html</a>
							<a class="post-tag">graphql</a>
						</div>
						<div class="user mx-3">
							<img src="./assets/avatar.png" height="25" width="25">&nbsp;<a href="#">DianaDbg</a>
						</div>
					</div>
				</div>			
			</div>
			<h4>1 Réponses</h3>
			<div class="answer pb-5">
				<div class="validate">
					<form>
						
							<div class="answers">
								<form class="validate">
									<button class="btn btn-outline-info mb-4"><i class="bi bi-check2" alt="valider réponse"></i></button>
								</form>
								<strong>0</strong>
								Validations
							</div>
			
					</form>
				</div>
				<div class="summary">
					<p>NgZone API allows us to execute certain code outside Angular’s Zone. Inject NgZone service then use runOutsideAngular method to run the certain code outside angular zone. NgZone API allows us to execute certain code outside Angular’s Zone. Inject NgZone service then use runOutsideAngular method to run the certain code outside angular zone.NgZone API allows us to execute certain code outside Angular’s Zone. Inject NgZone service then use runOutsideAngular method to run the certain code outside angular zone.NgZone API allows us to execute certain code outside Angular’s Zone. Inject NgZone service then use runOutsideAngular method to run the certain code outside angular zone.</p>
					<div class="tagsuser">
						<div class="tags">
						</div>
						<div class="user mx-3">
							<img src="./assets/avatar.png" height="25" width="25">&nbsp;<a href="#">DianaDbg</a>
						</div>
					</div>				
				</div>
			</div>

			<div class="post-answer">
			  	<form class="login-form" action="enregistrerquestion.php" method="post"> 				  
			  		<h4>Votre réponse</h4>
			  		<div class="mb-3">
			  			<input type="hidden" name="post-body" class="form-control" id="body-post">
			  		</div>
				  	<div id="editor"></div>
				  	<button type="submit" class="btn btn-post btn-info mt-5 mb-5" name="formquestion">Postez votre réponse</button>
			  	</form>
			</div>
	</div>
	<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
	<script src="./script/script.js"></script>
	<!--Include Footer-->
	<?php require './footer.php';?>
  </body>
</html>