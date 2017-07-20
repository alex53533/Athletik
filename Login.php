<!DOCTYPE html>
<html>
     
    <head>
        <meta charset="UTF-8">
        <title>Login page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="eva.css"/>
    </head>
     <?php include 'header.php'; ?>
    <body>
        
            <div  class="row container col-xs-offset-3 col-xs-6" id="regformdiv">
                //<button id='register' class="col-xs-offset-3 col-xs-6 btn btn-lg btn-danger">Créer un nouveau participant</button>
                <form method="post" action="Login.php" id="register_form" class="">
                </form>
                <br>
                <script src="CreateParticipant.js"></script>
            </div>    
       
    </body>
    <?php
        try
            {
            $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'mvb94');
            $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }catch (Exception $e)
            {
             die('Erreur : ' . $e->getMessage());}
             
        $nID = filter_input(INPUT_POST, 'newuserID',FILTER_SANITIZE_NUMBER_INT);  
        $nfirstN = filter_input(INPUT_POST, 'fnamec',FILTER_SANITIZE_STRING);
        $nlastN = filter_input(INPUT_POST, 'lnameee',FILTER_SANITIZE_STRING);
        $nbirthN = filter_input(INPUT_POST, 'newuserage',FILTER_SANITIZE_STRING);
        
        /*if (isset($_POST['newuserID']) AND isset($_POST['nfirstN']) AND isset($_POST['nlastN']) AND isset($_POST['nbirthN'])){
         $nID = filter_var($_POST['newuserID'], FILTER_SANITIZE_STRING);
         $nfirstN = filter_var($_POST['nfirstN'], FILTER_SANITIZE_STRING);
         $nlastN = filter_var($_POST['nlastN'], FILTER_SANITIZE_STRING);
         $nbirthN = filter_var($_POST['nbirthN'],FILTER_SANITIZE_NUMBER_INT);
         */
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
    
  
       
            
            
            
           /* 
            try {
            $IDexistant = $bdd->prepare('SELECT id FROM athlete WHERE id = :ID');
            $IDexistant->bindValue(':ID', $ID);
            $IDexistant->execute();
            $OldID = $IDexistant->fetch();
            echo $OldID['id'].'<br/>';
            } catch (Exception $ex) {
               die(); 
            }
            if ($ID !== $OldID['id']){
                
            $Insert = $bdd->prepare('INSERT INTO athlete (id, firstname, lastname, birthdate) VALUES (:id, :firstname, :lastname, :birthdate)');
            $Insert->bindValue(':id', $ID, PDO::PARAM_STR);
            $Insert->bindValue(':firstname', $firtsN, PDO::PARAM_STR);
            $Insert->bindValue(':lastname', $lastN, PDO::PARAM_STR);
            $Insert->bindValue(':birthdate', $birthD, PDO::PARAM_INT);
            $Insert->execute();
            echo 'participant créé';
                
            } else { 
                echo 'id deja existant';}
            
             else { 
                echo 'champs non remplis';
        }}*/
    ?>
</html>
