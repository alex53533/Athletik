<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
?>
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
        <?php
        include 'PDObdd.php';
         ?>                   
        <div class="btns col-xs-offset-4 col-xs-4">
            <?php
             $reponse= $bdd->query('SELECT * FROM athlete');
             ?>
            <div> <a id="addRunnerNULL" href="formRunner.php" role="button" class="btn btn-primary">Création d'un participant</a></div>
            <?php
             $reponse= $bdd->query('SELECT * FROM meeting');
             ?>
            <div> <a id="formEvent" href="formEvent.php" role="button" class="btn btn-primary">Création d'un événement</a></div>
            <?php
             $reponse= $bdd->query('SELECT * FROM result, athlete, meeting');
             ?>
            <div> <a href="formCalcul.php" role="button" class="btn btn-primary">Calculer les points d'un coureur</a></div>
            
            <div> <a href="formInsertResult.php" role="button" class="btn btn-primary">Enregistrer un résultat</a></div> 
            <div> <a href="formConnectG.php" role="button" class="btn btn-warning glyphicon glyphicon-fast-backward"  ></a></div>
        </div>
    </body>
    <?php include 'footer.php'; ?>
</html>