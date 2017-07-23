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
        <div class='descHeader'>
            <div id='nxt'> 
                <h2>Meetings à venir :
                   <?php
                   include 'PDObdd.php';
                   $IndexWeb=new IndexWeb;
                   $IndexWeb-> nextmeet();
                   ?>
                </h2>
            </div>
            <div id="desc">
                   <p>Bienvenue à tous les sportifs et amateurs de course à pied sur le site de l'association 'athletik-les 1000 pas' ! 
                 Petite présentatation de l'association: Nous organisons tous les ans 5 courses de 1 kilometre afin de partager notre 
                 passion. Petits comme grands nous vous acceuillons dans un cadre convivial et sportif.</p>
            </div>
        </div>    
        <main>     
        <div id="resul">
            <div id='pleft1'>
                <h4>Résultat de la dernière course</h4>
                   <?php
                   include 'PDObdd.php';
                   $IndexWeb=new IndexWeb;
                   $IndexWeb-> lastresult();
                   ?>
            </div>  
            <div id='pleft2'>
                   <img src="img/cap.jpg">
            </div>  
        </div>    
        <div id="general">
                <h4>Classement général 2017</h4>
                   <?php
                   include 'PDObdd.php';
                   $IndexWeb=new IndexWeb;
                   $IndexWeb-> classmnt();
                   ?>
        </div>
        <div id='nxt'>
          <h2>Les derniers meetings :
                   <?php
                   include 'PDObdd.php';
                   $IndexWeb=new IndexWeb;
                   $IndexWeb-> lastmeet();
                   ?>
          </h2>
        </div>
        </main>
    </body>
    <?php include 'footer.php'; ?>
</html>
