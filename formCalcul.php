<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
include 'classModel.php';
$Calcul=new calcul;
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title> P eval</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="eva.css"/>
      </head>
    <body>
        <header class="col-xs-12">
        <div id="divtitre_header" class="">
            <h1 class="asso">athletik-les 1000 pas
            <?php if (isset($_SESSION['pseudo'])) { ?>
            <a href="destroy.php" role="button" class="btn btn-danger">Déconnection</a>
            <?php echo '('.$_SESSION['pseudo'].')';} ?>
            </h1>
        </div>
        </header>
       <h3 class="col-xs-12 bg-info">Formulaire pour le calcul des points</h3>
             <form method="POST" action="formCalcul.php" class="formulaire">
            <div class="form-group">
                <label class="col-xs-5 bg-info">Temps de la performance:</label>
                <input  type="text" placeholder="Temps m.s" id="time" name="time" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Age du participant:</label>
                <input type="number" placeholder="Age" id="age" name="age" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Points:</label>
                <input disabled type="number" placeholder="points" id="points" name="points" required/>
            </div>  
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
                <div id="valider" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-ok-circle"></span></div>
            </div>
        <nav>         
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button class="btn btn-warning btn-lg"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></button>
            </div>   
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button class="btn btn-warning btn-lg"><a href="choiceManag.php"><span class="glyphicon glyphicon glyphicon-fast-backward"></span></a></button>
            </div>
        </nav>      
        </form>
       <script src="calcul.js">
       </script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script> 
       <?php
       $Calcul->calcul();
       ?>
    </body>
</html>     
             
             
             