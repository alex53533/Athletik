<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
?>
<!DOCTYPE html>
<html>
    <?php
  include '../model/PDObdd.php';
    ?>
<head>
    <meta charset="utf-8">
    <title>Choix de la connexion</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../eva.css"/>
</head>
    <?php include '../view/header.php'; ?>
    <body>
        <?php
        include '../model/PDObdd.php';
         ?>                   
        <div id="choiceM" class="btns col-xs-offset-4 col-xs-4">
            <?php
             $reponse= $bdd->query('SELECT * FROM athlete');
             ?>
            <div> <a id="addRunnerNULL" href="../view/formRunner.php" role="button" class="btn btn-primary">Création d'un participant</a></div>
            <?php
             $reponse= $bdd->query('SELECT * FROM meeting');
             ?>
            <div> <a id="formEvent" href="../view/formEvent.php" role="button" class="btn btn-primary">Création d'un événement</a></div>
            <?php
             $reponse= $bdd->query('SELECT * FROM result, athlete, meeting');
             ?>
            <div> <a href="../view/formCalcul.php" role="button" class="btn btn-primary">Calculer les points d'un coureur</a></div>
            
            <div> <a href="../view/formInsertResult.php" role="button" class="btn btn-primary">Enregistrer un résultat</a></div> 
        </div>
    </body>
    <?php include '../view/footer.php'; ?>
</html>