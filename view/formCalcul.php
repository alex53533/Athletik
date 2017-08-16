<?php
session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
include '../view/header.php';
include '../model/calculClass.php';
$Calcul=new calcul;
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title> P eval</title>
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
      <link rel="stylesheet" href="../eva.css"/>
      </head>
    <body>
     <section class="formc">
       <div class='menuAct'>
           <?php
           include '../view/buttonMenu.php';
           ?>
       </div> 
       <h3 class="col-xs-12 bg-info">Formulaire pour le calcul des points</h3>
             <form method="POST" action="view/formCalcul.php" class="formulaire">
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
        </form>
       <script src="calcul.js">
       </script>
       <?php
       $Calcul->calcul();
       ?>
      </section>
    </body>
    <?php include '../view/footer.php'; ?>
</html>     
             
             
             