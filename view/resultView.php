<?php session_start() ;
//if(empty($_SESSION['pseudo'])){ header('Location: formConnectG.php');}
include '../model/resultbyDClass.php';
$Resultbydate= new Resultbydate;
?>
<!DOCTYPE html>
<html>
    <?php
  include '../model/PDObdd.php';
    ?>
<head>
    <meta charset="utf-8">
    <title>Index eval</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../eva.css"/>
</head>
    <?php include '../view/header.php'; ?>
    <body>
    <main>     
      <div id="lastRunning">
        <?php    
           $Resultbydate->byview();  
        ?>
        </div>
      </main>
    </body>
    <?php include '../view/footer.php'; ?>
</html>
