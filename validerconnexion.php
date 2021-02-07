<?php 
session_start();
$bdd = new PDO('mysql:host=localhost:3308;dbname=stackoverflow1;charset=utf8', 'root', 'bambademe',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

if(isset($_POST['formconnexion']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = sha1($_POST['password']);

    if($pseudo !== "" AND $password !== "")
    {
        $query = $bdd->query("SELECT * FROM apprenants WHERE pseudo = '$pseudo' AND passwd = '$password' LIMIT 1");
        $result = $query->rowCount();
        // $result = $query->fetch();
        // echo '<pre>';
        // print_r($result);
        // echo '<pre>';
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if($result !=0)
        {
            
            $_SESSION['nom']=$row['nom'];
            $_SESSION['prenom']=$row['prenom'];
            $_SESSION['pseudo']=$row['pseudo'];
            $_SESSION['estsup']=$row['superviseur'];
            $_SESSION['id_apprenant']=$row['id'];
            
        

            
            header('Location: index.php');
        }
        
        else header('Location: login.php');
    }
    else header('Location: login.php?erreur=0');
}

?>