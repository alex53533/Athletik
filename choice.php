<!DOCTYPE html>
<html>
    <?php
  include 'PDObdd.php';
    ?>
<head>
    <meta charset="utf-8">
    <title>Choix de la connexion</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="eva.css"/>
</head>
    <?php include 'header.php'; ?>
    <body>
     
        <div class='btn2'> <a href="OO.php" role="button" class="btn btn-danger">Inscription</a>
    
      </div>
      
        <div class="choiceB">
            <div> <a href="gestionlogin.php" role="button" class="btn btn-primary">Connection Gestionnaire</a></div>
            
            <div> <a href="OO.php" role="button" class="btn btn-primary">Connection Runner</a></div> 
        </div>
        
    </body>
    <?php include 'footer.php'; ?>
</html>
