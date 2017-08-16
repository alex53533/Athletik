<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
 include 'model/PDObdd.php';
 include 'model/indexClass.php';
 include 'controller/controIndex.php';
 include 'model/resultbyDClass.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> P eval</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="eva.css"/>
</head>
    <?php
  include 'view/header.php'; 
    ?>
    <body>
     <nav>
        <ul class="btnav">
           <?php if (empty($_SESSION['pseudo'])) { ?>
          <li class='btn1'> <a href="view/choice.php" role="button" class="btn btn-success"><?php echo"Connexion";?></a>
           </li>
          <li class='btn2'> <a href="OO.php" role="button" class="btn btn-info"><?php echo"Inscription";}?></a>
           </li>
        </ul>
        <ul class="btnMan">
           <li class='menuMan'>
           <?php
           include 'view/buttonMenu.php';
           ?>
           </li>
           <li class='btn3'> <a href="view/formCalcul.php" role="button" class="btn btn-primary">Calculez votre score</a></li>
        </ul>
     </nav>  
     <section>   
        <div class='descHeader'>
            <div id='nxt'> 
                <h2>Meetings à venir :
                   <?php
                   $NextBMeet=new NextBMeet;
                   $NextBMeet-> nextmeeting();
                   ?>
                </h2>
            </div>
            <article> 
            <div id="desc">
                   <p>Bienvenue à tous les sportifs et amateurs de course à pied sur le site de l'association 'athletik-les 1000 pas' ! 
                 Petite présentatation de l'association: Nous organisons tous les ans 5 courses de 1 kilometre afin de partager notre 
                 passion. Petits comme grands nous vous acceuillons dans un cadre convivial et sportif.</p>
            </div>
            </article>     
        </div> 
     </section>    
     <main>     
        <div id="resul">
            <div id='pleft1'>
                <h4>Résultat de la dernière course</h4>
                   <?php
                   $NextBMeet=new NextBMeet;
                   $NextBMeet-> lastclassmnt();
                   ?>
            </div>  
            <div id='pleft2'>
                   <img id="cc" src="img/strun.jpeg" alt="image course à pied">
                   
            </div>  
        </div>    
        <div id="pright">
        <div id='photo'>
                   <img id="cap" src="img/cap.jpg" alt="image course à pied">
        </div>      
        <div id="general">
                <h4>Classement général 2017</h4>
                   <?php
                   $NextBMeet-> generalclassmnt();
                   ?>
        </div>
        </div>
    <section>
         <div id='byevent'>
                   <?php
                   //$IndexWeb=new IndexWeb;
                   //$IndexWeb-> lastmeet();
                   $NextBMeet=new NextBMeet;
                   $NextBMeet-> resultbymeeting();
                   ?>
        </div>
    </section>        
    </main>
        <?php include 'view/footer.php'; ?>
    </body>
    
</html>
