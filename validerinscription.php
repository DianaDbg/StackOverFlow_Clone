<?php

    $bdd = new PDO('mysql:host=localhost;dbname=stackoverflow;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

    if(isset($_POST['forminscription']))
    {
        $name = htmlspecialchars($_POST['name']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mp1 = sha1($_POST['mp1']);
        $mp2 = sha1($_POST['mp2']);

        if(!empty($_POST['name']) AND !empty($_POST['pseudo']) AND !empty($_POST['mp1']) AND !empty($_POST['mp2']))
        {
            $reqmail = $bdd->query("SELECT * FROM apprenant WHERE pseudo = '$pseudo'");
            //$reqmail->execute(array($pseudo));
            $mailexist = $reqmail->rowCount();
            if($mailexist == 0)
            {
                if($mp1 == $mp2)
                {
                    $insertapp = $bdd->prepare("INSERT INTO apprenant(nom, pseudo, passwd) 
                        VALUES(?, ?, ?)") or die(print_r($bdd->errorInfo()));
                    $insertapp->execute(array($name, $pseudo, $mp1));

                    $erreur = "Your account has been successfully created <a href=\"pseudo.php\">Sign in</a>";

                }
                else $erreur = "Passwords do not match";
            }
            else $erreur = "pseudo already used";
        }
        else $erreur = "All fields must be completed";
    }
?>