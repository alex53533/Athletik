<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <?php
    require 'modele.php';
        try
            {
            $bdd = getBdd();
            $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }catch (Exception $e)
            {
             die('Erreur : ' . $e->getMessage());}
    ?>
    <head>
        <title>eval</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="eva.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    </head>
    <?php include 'header.php'; ?>
    <body class="">
        <form method="post" action="addrunner.php" class="">
            
            <div class="form-group">
                <label class="col-xs-5" for="fname">Prénom:</label>
                <input type="text" name="fnamec"/>
            </div>
            <div class="form-group">
                <label class="col-xs-5" for="lname">Nom:</label>
                <input type="text" name="lnameee"/>
            </div>
            <div class="form-group">
                <label class="col-xs-5" for="year">Année de naissance:</label>
                <input type="number" name="newuserage"/>
            </div>
            <div class="btn-group col-xs-offset-4 col-xs-8 ">
               <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-ok-circle"></span></button>
            </div>
        </form>
        <?php
       /* $nfirstN = filter_input(INPUT_POST, 'fnamec',FILTER_SANITIZE_STRING);
        $nlastN = filter_input(INPUT_POST, 'lnameee',FILTER_SANITIZE_STRING);
        $nbirthN = filter_input(INPUT_POST, 'newuserage',FILTER_SANITIZE_STRING);
        if (!empty($nfirstN) AND !empty($nlastN) AND !empty($nbirthD)){
    $insert = $bdd->prepare('INSERT INTO athlete (id, firstname, lastname, birthdate) VALUES (:id, :firstname, :lastname, :birthdate)');
    $insert->bindValue(':firstname', $nfirstN, PDO::PARAM_STR);
    $insert->bindValue(':lastname', $nlastN, PDO::PARAM_STR);
    $insert->bindValue(':birthdate', $nbirthN, PDO::PARAM_INT);
    $insert->execute();
    echo 'participant créé';
        }
    else { 
    echo 'id deja existant';}
    */
     $nID = filter_input(INPUT_POST, 'newuserID',FILTER_SANITIZE_NUMBER_INT);  
        $nfirstN = filter_input(INPUT_POST, 'fnamec',FILTER_SANITIZE_STRING);
        $nlastN = filter_input(INPUT_POST, 'lnameee',FILTER_SANITIZE_STRING);
        $nbirthN = filter_input(INPUT_POST, 'newuserage',FILTER_SANITIZE_STRING);
        
        if (!empty($nID) AND !empty($nfirstN) AND !empty($nlastN) AND !empty($nbirthD)){
    $insert = $bdd->prepare('INSERT INTO athlete (id, firstname, lastname, birthdate) VALUES (:id, :firstname, :lastname, :birthdate)');
    $insert->bindValue(':id', $newuserID, PDO::PARAM_INT);
    $insert->bindValue(':firstname', $fnamec, PDO::PARAM_STR);
    $insert->bindValue(':lastname', $lnameee, PDO::PARAM_STR);
    $insert->bindValue(':birthdate', $newuserage, PDO::PARAM_INT);
    $insert->execute();
    echo 'participant créé';
        }
    else { 
    echo 'id deja existant';}
    
    
    
       ?>
    </body>
</html>

