<?php
/**
 * Description of addMeetingClass
 *
 * @author alex
 */
include 'PDObdd.php';

class Addmeet {
    public function ajoutmeet(){
        include 'PDObdd.php';
    $lieux=$_POST['lieux7'];
    $description=$_POST['description7'];
    $date=$_POST['date7'];
    $req= $bdd->prepare("INSERT INTO meeting VALUES (NULL,:name,:description,:date)");
    $req->bindValue(':name', $lieux ,PDO::PARAM_STR);
    $req->bindValue(':description', $description,PDO::PARAM_STR);
    $req->bindValue(':date', $date ,PDO::PARAM_INT);
    $insert=$req->execute();
      if ($insert){
         echo '<script> alert("L\'événement a bien été ajouté");</script>';
        }
    }
}  

