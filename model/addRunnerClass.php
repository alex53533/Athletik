<?php
/**
 * Description of addRunnerClass
 *
 * @author alex
 */

class Addrunn {
    public function ajoutrunn(){
        include '../model/PDObdd.php';
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $birthdate=$_POST['birthdate'];
    $req= $bdd->prepare("INSERT INTO athlete VALUES (NULL,:firstname,:lastname,:birthdate)");
    $req->bindValue(':firstname', $firstname ,PDO::PARAM_STR) ;
    $req->bindValue(':lastname', $lastname,PDO::PARAM_STR) ;
    $req->bindValue(':birthdate', $birthdate ,PDO::PARAM_INT) ;
    $insert=$req->execute();
      if ($insert){
         echo '<script> alert("Participant ajouté à la liste");</script>';
        }
    }
}
