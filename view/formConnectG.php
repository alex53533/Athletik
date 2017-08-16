<?php session_start();
//$_SESSION['pseudo']=NULL;
include '../model/connectClass.php';
$Connect=new Connect;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login gestionnaire page</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="../eva.css"/>
    </head>
    <?php include '../view/header.php'; ?>
    <body>
   <div class='fcG'>   
    <h3 class="col-xs-12 bg-info">Renseignez vos identifiants pour le compte Gestionnaire</h3>
        <div class="formCG">
            <form class="col-xs-offset-4 col-xs-4" method="post" action="?page=formConnectG">
                <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="pseudo" placeholder="Identifiant gestionnaire">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="mot de passe gestionnaire"> 
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-check"></span></button>
                <div> <a href="choice.php" role="button" class="btn btn-warning glyphicon glyphicon-fast-backward"></a></div>
            </form>   
              
        </div>
   </div>     
        <?php
         include '../model/PDObdd.php';
         if(isset($_POST['pseudo'])){
         $Connect->connect();
         }
        ?>
    </body>
    <?php include '../view/footer.php'; ?>
</html>


