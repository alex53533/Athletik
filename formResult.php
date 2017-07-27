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
             <form method="POST" action="formResult.php" class="formulaire">
            
            <div class="form-group">
                <label class="col-xs-5 bg-info">Id du runner:</label>
                <input type="number" placeholder="Id" name="athlete_id" required/>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Id du meeting:</label>
                <input type='number' name='meeting_id' placeholder="Id du meeting" required>
            </div>
            <div class="form-group">
                <label class="col-xs-5 bg-info">Temps de la performance:</label>
                <input type="foat" placeholder="time m.ss" name="time" required/>
            </div>     
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button type="submit" name="valider" value="Ajouter" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-ok-circle"></span></button>
            </div>
            <div class="btn-group col-xs-offset-5 col-xs-8 ">
               <button class="btn btn-warning btn-lg"><a href="testacc.php"><span class="glyphicon glyphicon-home"></span></a></button>
            </div>
        </form>
       <script>
       /* var INPUT_TIME= document.getElementByClassName('time');
        
        function resuPoint(){
        var time = document.getElementById('.time'); 
        var age = document.getElementById('.age'); 
	    var points  = document.getElementById()('.points');
        
         if(age <= 22) points = (1000/time)*1.09;
	else if(age <= 13) points = (1000/time)*1.42;
	else if(age <= 15) points = (1000/time)*1.35;
	else if(age <= 17) points = (1000/time)*1.21;
	else if(age <= 19) points = (1000/time)*1.18;
	else if(age <= 11) points = (1000/time)*1.5;
	else if(age <= 40) points = (1000/time);
	else points = (1000/time)*1.35; 
        }
        for (var i=0; i < INPUT_TIME.lenght; i++){
            INPUT_TIME[i].addEventListener("dd", resuPoint);
        }
       */
       </script>
	   <script type="text/javascript"> var INPUT_TIME = document.getElementsByClassName('time');</script>
    <script type="text/javascript" src=js.js"></script>
    <script type="text/javascript">for (var i = 0; i < INPUT_TIME.length; i++) {
	INPUT_TIME[i].addEventListener("keyup", calcPoint); //On applique à notre prise (c.f. variable.js) un event a chaque touche qui lance calcPoint (c.f. function.js)
}</script>
	   
       <?php
       /* include 'PDObdd.php';
       $req = $bdd->prepare("UPDATE result SET time = :time, points = :points WHERE athlete_id = :athlete_id AND meeting_id = :meeting_id");
       $req->execute(array( 
	                        'points'  => $_GET['points'],
	                        'athlete_id' => $_GET['athlete_id'],
	                        'meeting_id'=> $_GET['meeting_ids'],
                                'time'    => $_GET['time'],));
       echo '<script> alert("Score ajouté");</script>';  */
	   
	   include 'insertResult.php';
	   
	   
       ?>
    </body>
</html