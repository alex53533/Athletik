<?php
session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
include '../view/header.php';
include '../model/addResultClass.php';
$Insertresult=new InsertResult;
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
      <section class="formires">
        <div class='menuAct'> 
            <a href="../view/choiceManag.php" role="button" class="btn btn-success glyphicon glyphicon-menu-hamburger" alt='menu'></a>               
        </div>
       <h3 class="col-xs-12 bg-info">Formulaire d'enregistrement des résultats pour la mise à jour du classement</h3>
             <form method="POST" action="../view/formInsertResult.php" class="formulaire">
            
            <div class="form-group">
                <label class="col-xs-5 bg-info">Id du participant:</label>
                <input type="number" placeholder="Id du coureur" id="athlete_id" name="athlete_id" />
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Id du meeting:</label>
                <input type='number' placeholder="Id du meeting" id='meeting_id' name="meeting_id" >
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Temps de la performance:</label>
                <input  type="text" placeholder="Temps m.s" id="time" name="time" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Points:</label>
                <input type="number" placeholder="points" id="points" name="points" required/>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button type="submit" name="addbdd" value="Ajouter" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span></button>
            </div>  
        </form>  
        <?php
        $Insertresult->insertresult();
        ?>
      </section> 
    </body>
    <?php include '../view/footer.php'; ?>
</html     
             
             
