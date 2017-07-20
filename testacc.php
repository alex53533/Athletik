<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: gestionlogin.php');}
?>
<!DOCTYPE html>
<html>
    <?php
  include 'PDObdd.php';
    ?>
<head>
    <meta charset="utf-8">
    <title> P eval</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="eva.css"/>
</head>
    <?php include 'header.php'; ?>
    <body>
      <div class="btn">
        <div class='btn1'> <a href="choice.php" role="button" class="btn btn-success">Connexion</a>
        </div>
        <div class='btn2'> <a href="OO.php" role="button" class="btn btn-danger">Inscription</a>
        </div>
      </div>
      <div id='nxt'> 
          <h2>Meetings à venir :
             <?php
        $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'mvb94');
        $meet = $bdd->prepare('SELECT * FROM meeting WHERE YEAR(meeting.date) = 2017');
        $meet->execute(array());
        while($donnees = $meet->fetch()){
            
           echo '<ul>'; 
                          echo $donnees['name']." ";
                          echo $donnees['date']." ";
           echo '</ul>';
        }   ?></h2>
      </div>
      <div id="desc">
          <p>Bienvenue à tous les sportifs et amateurs de course à pied sur le site de l'association 'athletik-les 1000 pas' ! 
             Petite présentatation de l'association: Nous organisons tous les ans 5 courses de 1 kilometre afin de partager notre 
             passion. Petits comme grands nous vous acceuillons dans un cadre convivial et sportif.</p>
            
      </div>
        <main>     
        <div id="resul">
            <div id='pleft1'>
            <h4>Résultat de la dernière course</h4>
            <?php
        $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'mvb94');
        $clmnt = $bdd->prepare('SELECT athlete.*, result.time, result.points  FROM athlete inner join result on athlete.id = result.id WHERE result.meeting_id = 1');
        $clmnt->execute(array());
        while($donnees = $clmnt->fetch()){
            
           echo '<ul>';
                          echo $donnees['firstname']." ";
                          echo $donnees['lastname']." ";
                          echo $donnees['points'];
           echo '</ul>';
        }   ?>
            </div>  
        <div id='pleft2'>
            <img src="img/cap.jpg">
        </div>  
        </div>    
        <div id="general">
            <h4>Classement général 2017</h4>
            <?php
       /* $firsname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
        $points = $_GET["points"];*/
        
        $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'mvb94');
        $resugene = $bdd->prepare('SELECT SUM(result.points) as total, athlete.lastname, athlete.firstname FROM result inner join athlete on result.athlete_id = athlete.id inner join meeting on result.meeting_id = meeting.id WHERE YEAR(CURRENT_DATE()) = 2017 GROUP BY athlete.id ORDER BY total DESC');
        $resugene->execute(array());
        while($donnees = $resugene->fetch()){
        
             echo'<ul>';
                          echo $donnees['firstname']." ";
                          echo $donnees['lastname'];
                          //echo $donnees['points'];
                          
             echo'</ul> ';    
        }   ?>
        </div>
       
        </main>
        
    </body>
    <?php include 'footer.php'; ?>
</html>
