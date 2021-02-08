<?php
session_start();

// echo '<pre>';
// print_r($_POST);
// echo '<pre>';
$bdd = new PDO('mysql:host=localhost:3308;dbname=stackoverflow1;charset=utf8', 'root', 'bambademe',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
// on insère la question
$req = $bdd->prepare("INSERT INTO questions(titre,intitule,date_question,id_auteur) VALUES(?,?,NOW(),?)");
$req->execute([
    $_POST['nomquestion'],
    $_POST['post-body'],
    $_SESSION['id_apprenant']
]);

$req->closeCursor();
$id_question = $bdd->lastInsertId();
// echo $id_question;
// on insère les tags

// echo count($_POST['themes']);
for ($i=0; $i <count($_POST['themes']) ; $i++) { 
    // on cherche d'abord si le theme n'existe pas déjà avant de le créer
    $theme = $_POST['themes'][$i];
    $tag = $bdd->query("SELECT * FROM themes WHERE nom = '$theme' ");
    if($tag->rowCount()==0){
        $req = $bdd->prepare("INSERT INTO themes(nom) VALUES(?)");
        $req->execute([
            strtolower(htmlspecialchars($theme))
        ]);
        $id_theme =  $bdd->lastInsertId();
        $req1 = $bdd->exec("INSERT INTO question_theme(question,theme) VALUES($id_question,$id_theme)");
        // echo $id_theme;
    }
    else{
        $id_theme = $tag->fetch();
        $id_theme = $id_theme['id'];
        $req1 = $bdd->exec("INSERT INTO question_theme(question,theme) VALUES($id_question,$id_theme)");

        // echo $id_theme;
    }
   // $req->closeCursor();
    
    // on cherche l'id du theme
    // $req = $bdd->query("SELECT * FROM themes WHERE nom = '$theme'");
    // $reponse = $req->fetch();
    // echo $reponse['id'];

}

?>