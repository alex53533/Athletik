<?php
session_start();
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
include '../view/header.php';
include '../model/addMeetingClass.php';
$Addmeet = new Addmeet;
?>
<!DOCTYPE html>
<html>
    <?php
    include_once '../model/PDObdd.php';
    ?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="../eva.css"/>
        <title>Formulaire nouveau meeting</title>
    </head>
    <body>
    <section class="formt">
        <div class='menuAct'> 
            <a href="../view/choiceManag.php" role="button" class="btn btn-success glyphicon glyphicon-menu-hamburger" alt='menu'></a>               
        </div>
        <h3 class="col-xs-12 bg-info">Formulaire d'ajout d'événement</h3>
        <form method="POST" action="../view/formEvent.php" class="formulaire">
            <div class="form-group">
                <label class="col-xs-5 bg-info">Lieux de l'événement:</label>
                <input type="text" placeholder="Ville" name="lieux7" required/>
            </div>
            <div id='descr' class="form-group">
                <label class="col-xs-5 bg-info">Description du meeting:</label>
                <textarea type="text" name="description7" id="description" WRAP ="virtual"></textarea>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Date de l'événement:</label>
                <input name='date7' class="date" placeholder="aaaa-mm-dd" type="date" required>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
                <button type="submit" name="valider" value="Ajouter" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-ok-circle"></span></button>
            </div>
        </form>
        <?php
        if (isset($_POST['lieux7'])){
            $Addmeet->ajoutmeet();
        }
        ?>
    </section>  
    </body>
    <?php include '../view/footer.php'; ?>
</html>
