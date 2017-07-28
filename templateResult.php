<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}

?>
<!DOCTYPE html>
<html>
    <?php
  include 'PDObdd.php';
  include 'classModel.php';
    ?>
<head>
    <meta charset="utf-8">
    <title>Index eval</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="eva.css"/>
</head>
    <?php include 'header.php'; ?>
    <body>
     <section>   
      <div class="btn">
        <div class='btn1'> <a href="choice.php" role="button" class="btn btn-success">Connexion</a>
        </div>
        <div class='btn2'> <a href="OO.php" role="button" class="btn btn-danger">Inscription</a>
        </div>
      </div>
     </section>    
    <main>     
        <div id="lastRunning">
        <?php
        include 'PDObdd.php';
        $clmnt = $bdd->prepare('SELECT athlete.*, result.time, result.points  FROM athlete inner join result on athlete.id = result.id WHERE result.meeting_id = 1');
        $clmnt->execute(array());
        while($donnees = $clmnt->fetch()){
           echo '<ul>';
                          echo $donnees['firstname']." ";
                          echo $donnees['lastname']." ";
                          echo $donnees['points'];
           echo '</ul>';
        }  
        ?>
        </div>
    </main>
    </body>
    <?php include 'footer.php'; ?>
</html>