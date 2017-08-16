<?php
/**
 * Description of calculClass
 *
 * @author alex
 */
include 'PDObdd.php';

class Calcul {
    public function calcul(){
        include 'PDObdd.php';
        if(isset($_POST['points'])){
                 $time=$_POST['time'];
                 $age=$_POST['age'];
                 $points=$_POST['points'];
        }
    }  
}