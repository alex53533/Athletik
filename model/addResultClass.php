<?php
/**
 * Description of addResultClass
 *
 * @author alex
 */
include 'PDObdd.php';

class Insertresult {
    public function insertresult(){
         include 'PDObdd.php';
     if(isset($_POST['athlete_id'])){
     $athlete_id =$_POST['athlete_id'];
     $meeting_id =$_POST['meeting_id'];
     $time =$_POST['time'];
     $points =$_POST['points'];
     $req = $bdd->prepare("INSERT INTO result VALUES (NULL, :meeting_id, :athlete_id, :time, :points)");
     $req->bindValue(':meeting_id', $meeting_id,PDO::PARAM_INT);
     $req->bindValue(':athlete_id', $athlete_id,PDO::PARAM_INT);
     $req->bindValue(':time', $time,PDO::PARAM_STR);
     $req->bindValue(':points', $points,PDO::PARAM_INT);
     $insert=$req->execute();
     if($insert){
     echo '<script> alert("Résultat ajouté");</script>';
    }
    }
    }   
}