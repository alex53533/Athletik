<?php
session_start();
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
include '../view/header.php';
include '../model/addRunnerClass.php';
$Addrunn=new Addrunn;
?>
<!DOCTYPE html>
<html>
    <?php
    include_once '../model/PDObdd.php';
    ?>
    <head>
        <title>eval</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../eva.css"/>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    </head>
    <body>
      <section class="formr">
        <div class='menuAct'> 
            <a href="../view/choiceManag.php" role="button" class="btn btn-success glyphicon glyphicon-menu-hamburger" alt='menu'></a>               
        </div>
        <h3 class="col-xs-12 bg-info">Formulaire d'ajout d'un nouveau participant</h3>
        <form method="POST" action="../view/formRunner.php" class="formulaire">
            <div class="form-group">
                <label class="col-xs-5 bg-info">Prénom du participant:</label>
                <input type="text" placeholder="Prénom" name="firstname" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Nom du participant:</label>
                <input type="text" placeholder="Nom" name="lastname" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Année de naissance du participant:</label>
                <input name='birthdate' placeholder="Saisir une année" type="number" min='1890' max='2017' required>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button type="submit" name="valider" value="Ajouter" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-ok-circle"></span></button>
            </div>
        </form> 
    <?php
    if(isset($_POST['firstname'])){
    $Addrunn->ajoutrunn();
    }
    ?>
      </section>
    </body>
    <?php include '../view/footer.php'; ?>
</html>

