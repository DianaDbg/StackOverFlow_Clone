<?php

$bdd = new PDO('mysql:host=localhost:3308;dbname=stackoverflow1;charset=utf8', 'root', 'bambademe',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

//Recupération des questions depuis la base de données
$query = $bdd->query("SELECT questions.id AS id_question,titre,intitule,date_question,id_auteur,apprenants.id as id_apprenant,pseudo AS auteur FROM questions,apprenants WHERE id_auteur=apprenants.id");
$questions = $query->fetchAll();

//fonction qui permet de récupérer l'apprenant qui a poser la question


//Creation d'une variable qui pour fixer le nombre maximum de caractères à afficher
$max = 150;


//fonction qui permet d'afficher qu'une partie du texte
function partOfText($text, $max)
{
	if(strlen($text) > $max)
	{
		$espace = strpos($text,' ',$max);
       	$morceau = substr($text,0,$espace).'...';
	}
	else $morceau = $text;
	echo $morceau;
}
?>

<div class="container">
	<div class="question container">
		<div class="question-header">	
			<div class="Title">	
				<h1>Toutes les questions</h1>
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
			// Pour chaque question on recupère les thémes qui lui concernent
			$id_question = $question['id_question'];
			$reponses = $bdd->query("SELECT question,theme,themes.id,themes.nom FROM question_theme,themes WHERE question=$id_question AND theme=themes.id"); 
			// $themes = $reponses->fetchAll();
			
		?>
			<div class="question-summary container">
				<div class="statscontainer">
					<div class="stats">
						<div class="answers">
							<strong>0</strong>
							Réponses
						</div>
					</div>
				</div>
				<div class="summary">
					<h3><a href="question.php?id=<?php echo $question['id_question']; ?>"><?php echo $question['titre']; ?></a></h3>
					<div class="excerpt"><?php partOfText($question['intitule'], $max) ?></div>
					<div class="tagsuser">
						<div class="tags">
						<?php
						while($theme=$reponses->fetch()){?>
							<a class="post-tag"><?php echo $theme['nom']; ?></a>
						<?php
						}
						?>
							<!-- <a class="post-tag">java</a>
							<a class="post-tag">python</a>
							<a class="post-tag">css</a>
							<a class="post-tag">html</a>
							<a class="post-tag">graphql</a> -->
						</div>
						<div class="user mx-3">
							<img src="./assets/avatar.png" height="25" width="25">&nbsp;<a href="#"><?php echo $question['auteur']; ?></a>
						</div>
					</div>			
				</div>
			</div>
		<?php 
		} ?>	
		<!-- <div class="question-summary container">
			<div class="statscontainer">
				<div class="stats">
					<div class="answers">
						<strong>0</strong>
						Réponses
					</div>
				</div>
			</div>
			<div class="summary">
				<h3><a href="">How to find the parameters to a site that doesn't have the data within the HTML?</a></h3>
				<div class="excerpt">I have a list of locations and a dataframe like below and I want to select rows from a df with city and country columns where the location of the row (city and country) matches any of the pairs in ...</div>
				<div class="tags">
					<a class="post-tag">flask</a>
					<a class="post-tag">c#</a>
					<a class="post-tag">javascript</a>
					<a class="post-tag">django</a>
					<a class="post-tag">r</a>
				</div>
			</div>
		</div> -->
</div>

