<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleLogin.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/cart.css">
        <link rel="stylesheet" href="css/headerStyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fontawesome.js"></script>
        <script src="js/all.js"></script>
        <script src="js/script.js"></script>
    </head>
   <body>
    <nav class=" navbar navbar-expand-lg sticky-top" >
        <div class="container-fluid">
            <a class="navbar-brand navbar-brand-left visible-xs visible-xm" href="home.php"><img id="logo" src="css/images/Sam.png" alt="Home"></a>
            <button class="navbar-toggler ml-auto navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="navbar-nav ml-3">
            <li class="nav-item active">
            <a class ="nav-link" href="home.php"><span class="mr-1"><i class="fas fa-home"></i></span>Acceuil</a>
            </li>
            <li class="nav-item dropdown">
            <a class ="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-1"><i class="far fa-list-alt"></i></span>Catégories</a>
            <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Smartphone.php">Smartphone</a>
                <a class="dropdown-item" href="Pcportable.php">Computer</a>
                <a class="dropdown-item" href="Tablette.php">Tablette</a>
                <a class="dropdown-item" href="Accessesoire.php">Accessoires</a>
            </div>
        </li>

            <li class="nav-item ">
            <a class ="nav-link" href="#"><span class="mr-1"><i class="far fa-heart"></i></span>Offres</a>
            </li>
            </ul>
            <div class="search-box mr-2 ml-auto ">
                <input class="search-txt" type="text" name="" value="" placeholder="Chercher sur SAM ...">
                <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
          </div>
    <div class="ml-auto">
                <a href="#"><?php echo  $_SESSION['nom']."  ".$_SESSION['prenom'];?></a>
                <a class="mr-2" href="#"><i class="fas fa-shopping-bag"></i></a>
                <a href="includes/accesses/logout.php"><i class="fa fa-sign-out"> </i></a>
    </div>
            </div>
        </div>
    </nav>
</body>

</html>