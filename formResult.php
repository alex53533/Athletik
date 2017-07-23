<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="eva.css"/>
        <title>Formulaire nouveau meeting</title>
    </head>
    <?php include 'header.php';
    ?>
    <body>
       <h3 class="col-xs-12 bg-info">Formulaire pour le calcule des résultats</h3>
             <form method="POST" action=".php" class="formulaire">
            
            <div class="form-group">
                <label class="col-xs-5 bg-info">Id du runner:</label>
                <input type="number" placeholder="Id" name="id" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Catégorie du runner:</label>
                <input type="text" name="Cat1" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Id du meeting:</label>
                <input type='number' name='IdMeet' class="IdMeet" placeholder="Id du meeting"required>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button type="submit" name="valider" value="Ajouter" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-ok-circle"></span></button>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button class="btn btn-warning btn-lg"><a href="testacc.php"><span class="glyphicon glyphicon-home"></span></a></button>
            </div>
        </form>
    </body>
</html>
