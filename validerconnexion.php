<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=stackoverflow;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

if(isset($_POST['formconnexion']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = sha1($_POST['password']);

    if($pseudo !== "" AND $password !== "")
    {
        $query = $bdd->query("SELECT * FROM apprenant WHERE pseudo = '$pseudo' AND passwd = '$password' LIMIT 1");
        $result = $query->rowCount();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if($result !=0)
        {
            $_SESSION['nom']=$row['nom'];
            $_SESSION['pseudo']=$row['pseudo'];
            $_SESSION['estsup']=$row['estsuperviseur'];
            $_SESSION['nbrep']=$row['nbrep'];

            
            header('Location: index.php');
        }
        else header('Location: login.php');
    }
    else header('Location: login.php');
}

?>