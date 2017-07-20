<?php 
session_start();
$_SESSION['pseudo']=NULL;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login gestionnaire page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="eva.css"/>
    </head>
    <?php include 'header.php'; ?>
    <body>
    <h3 class="col-xs-12 bg-info">Renseignez vos identifiants pour le compte Gestionnaire</h3>
        <div class="">
            <form class="col-xs-offset-4 col-xs-4" method="post" action="gestionlogin.php">
                <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="pseudo" placeholder="Identifiant gestionnaire">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="mot de passe gestionnaire"> 
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-check"></span></button>
            </form>    
        </div>
        <?php
         include 'PDObdd.php';
         
        $pseudo = $_POST['pseudo'];
                 
         if(isset($_POST) && !empty($_POST['pseudo']) && !empty($_POST['password']))
         {
             try{
                $stmt = $bdd->prepare("SELECT * FROM user WHERE pseudo ='$pseudo'");
                $stmt->bindValue(':loginid', $_POST['pseudo']);
                $stmt->execute();
              }
             catch (Exception $e){
                die('Erreur : '.$e->getMessage());
             }
             $donnees = $stmt->fetch(PDO::FETCH_ASSOC);
             $pass = filter_var(FILTER_SANITIZE_STRING, $donnees['password']);
             if ($_POST['password']= $donnees['password']){
                //$_SESSION['pseudo'] = $donnees['pseudo'];
                //$_SESSION['password'] = $donnees['password'];
                 header('Location: choiceManag.php');
             }
             else {
                    echo '<p class="col-xs-12">mauvais identifiant ou mot de passe</p>';
                  }
         /*   }
         else{
            echo'<p class="col-xs-12">Vous avez oublié de remplir un champ.</p>';
            }*/
         }
        ?>
    </body>
</html>