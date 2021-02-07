<?php

    $bdd = new PDO('mysql:host=localhost:3308;dbname=stackoverflow1;charset=utf8', 'root', 'bambademe',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

    if(isset($_POST['forminscription']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mp1 = sha1($_POST['mp1']);
        $mp2 = sha1($_POST['mp2']);

        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pseudo']) AND !empty($_POST['mp1']) AND !empty($_POST['mp2']))
        {
            $reqmail = $bdd->query("SELECT * FROM apprenants WHERE pseudo = '$pseudo'");
            //$reqmail->execute(array($pseudo));
            $mailexist = $reqmail->rowCount();
            if($mailexist == 0)
            {
                if($mp1 == $mp2)
                {
                    $insertapp = $bdd->prepare("INSERT INTO apprenants(prenom,nom, pseudo, passwd) 
                        VALUES(?, ?, ?,?)") or die(print_r($bdd->errorInfo()));
                    $insertapp->execute(array($prenom,$nom, $pseudo, $mp1));

                    $erreur = "Your account has been successfully created <a href=\"pseudo.php\">Sign in</a>";
                    header('Location:login.php?success=1');

                }
                else{
                    $erreur = "Passwords do not match";
                    header('Location:register.php?erreur=1');
                }
            }
            else{
                $erreur = "pseudo already used";
                header('Location:register.php?erreur=0');
            } 
        }
        else $erreur = "All fields must be completed";
    }
?>