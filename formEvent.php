<?php
session_start();
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
include 'classModel.php';
$Addmeet = new Addmeet;
?>
<!DOCTYPE html>
<html>
    <?php
    include_once 'PDObdd.php';
    ?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="eva.css"/>
        <title>Formulaire nouveau meeting</title>
    </head>
    <?php
    include 'header.php';
    ?>
    <body>
        <h3 class="col-xs-12 bg-info">Formulaire d'ajout d'événement</h3>
        <form method="POST" action="formEvent.php" class="formulaire">

            <div class="form-group">
                <label class="col-xs-5 bg-info">Lieux de l'événement:</label>
                <input type="text" placeholder="Ville" name="lieux7" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Description du meeting:</label>
                <textarea type="text" name="description7" id="description" WRAP = "virtual"></textarea>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Date de l'événement:</label>
                <input name='date7' class="date" placeholder="aaaa-mm-dd" type="date" required>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
                <button type="submit" name="valider" value="Ajouter" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-ok-circle"></span></button>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
                <button class="btn btn-warning btn-lg"><a href="testacc.php"><span class="glyphicon glyphicon-home"></span></a></button>
            </div>
        <nav>    
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button class="btn btn-warning btn-lg"><a href="choiceManag.php"><span class="glyphicon glyphicon glyphicon-fast-backward"></span></a></button>
            </div>
        </nav>    
           
        </form>
        <?php
        if (isset($_POST['lieux7'])){
            $Addmeet->ajoutmeet();
        }
        ?>
    </body>
</html>
