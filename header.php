<?php 
if(!isset($_SESSION))
{
  session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>StackOverFlow Clone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./style/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="./style/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
  <link href="./style/style.css" rel="stylesheet">
  <script src="./style/bootstrap/js/bootstrap.js"></script> 
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
  <!-- <script src="https://cdn.quilljs.com/1.1.6/quill.js"></script> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navBar">
    <div class="container-fluid mx-5">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="./index.php">StackOverFlow Clone</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!--          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li> -->

          <input class="form-control search" list="datalistOptions" id="exampleDataList" placeholder="Recherchez...">
          <datalist id="datalistOptions">
            <option value="Python">
            <option value="Java">
            <option value="c">
            <option value="php">
            <option value="Go">
          </datalist> 
        </ul>

        <div>
          <?php 
          if(($_SESSION))
          {
          ?>
            <div class="dropdown">
              <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="./assets/avatar.png" height="40" width="40">
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><a class="dropdown-item" href="deconnexion.php">Déconnexion</a></li>
              </ul>
            </div>
          <?php 
          }
          else  
          {
          ?>
            <form class="d-flex">
              <button class="btn btn-outline-info me-2" type="submit"><a href="./login.php">Connexion</a></button>
              <button class="btn btn-info" type="submit"><a href="./register.php">S'inscrire</a></button>
            </form>
          <?php } 
          ?>
        </div>
      </div>
    </div>
  </nav>
  <script src="./style/bootstrap/js/bootstrap.js"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="./script/script.js"></script>
  </body>
</html>