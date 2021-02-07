<?php 
if(!isset($_SESSION))
{
    session_start();
}

//setcookie('pseudo', $_SESSION['pseudo'], time() + 30*24*3600, null, null, false,true);
//Include Header
require './header.php'; 
?>

<!--Include Question-->
<?php require './questions.php'; ?>

<!--Include Footer-->
<?php require './footer.php'; ?>