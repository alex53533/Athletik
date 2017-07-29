<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
include 'classModel.php';
$Addrunn=new Addrunn;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>eval</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="eva.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>
    <body class="">
         <header class="col-xs-12">
        <div id="divtitre_header" class="">
            <h1 class="asso">athletik-les 1000 pas
            <?php if (isset($_SESSION['pseudo'])) { ?>
            <a href="destroy.php" role="button" class="btn btn-danger">Déconnection</a>
            <?php echo '('.$_SESSION['pseudo'].')';} ?>
            </h1>
        </div>
        </header>
        <h3 class="col-xs-12 bg-info">Formulaire d'ajout d'un nouveau participant</h3>
        <form method="POST" action="formRunner.php" class="formulaire">
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
        <nav>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button class="btn btn-warning btn-lg"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></button>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button class="btn btn-warning btn-lg"><a href="choiceManag.php"><span class="glyphicon glyphicon glyphicon-fast-backward"></span></a></button>
            </div>
        </nav>    
        
    <?php
    if(isset($_POST['firstname'])){
    $Addrunn->ajoutrunn();
    }
    ?>
    </body>
</html>

