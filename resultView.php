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
             $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $reponse = $bdd->prepare('SELECT athlete.*,result.time, result.points FROM athlete inner join result on athlete.id = result.id WHERE result.meeting_id = :id OrDER BY result.points DESC');
             $reponse->bindValue(':id', $_GET['event_id'], PDO::PARAM_INT);
             $i = 1;
             $executeIsok = $reponse->execute();
                    echo'<div class="result" ">';
                      echo'<h2>Classement du meeting de ' . $_GET["name"] . '</h2>';
                      echo'<a href="index.php"></a>';
                    echo'</div>';
                    echo'<table>';
                      echo'<tr>
                              <th> Rang </th>
                              <th> Runner </th>
                              <th> Points </th>
                              <th> Performance </th>';
                      echo'</tr>';
                      while ($donnees = $reponse->fetch()) {
                      echo'<tr>';
                      echo '<td>' . $i++ . '</td><td>' . $donnees['firstname'] . ' ' . $donnees['lastname'] . '</td><td>' . $donnees['points'] . '</td><td>' . $donnees['time'] . '</td>';
                      echo'</tr>';
                      }
                    echo'</table>';
        ?>
        </div>
      </main>
    </body>
    <?php include 'footer.php'; ?>
</html>
