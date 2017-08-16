<?php
/**
 * Description of indexClass
 *
 * @author alex
 */
class IndexWeb{
    public function nextmeet(){
        include 'PDObdd.php';
        $meet = $bdd->prepare('SELECT * FROM meeting WHERE YEAR(meeting.date) = 2017');
        $meet->execute(array());
        while($donnees = $meet->fetch()){

           echo '<ul>'; 
                          echo $donnees['name']." ";
                          echo $donnees['date']." ";
           echo '</ul>';
    }
    }
    public function lastresult(){
        include 'PDObdd.php';
        
        $clmnt = $bdd->prepare('SELECT athlete.*, result.time, result.points  FROM athlete inner join result on athlete.id = result.id WHERE result.meeting_id = 1');
        $clmnt->execute(array());
        while($donnees = $clmnt->fetch()){
            
           echo '<ul>';
                          echo $donnees['firstname']." ";
                          echo $donnees['lastname']." ";
                          echo $donnees['points'];
           echo '</ul>';
        }
    }    
    public function resultbymeet(){
        include 'PDObdd.php';
        
        $reponse = $bdd->prepare('SELECT athlete.*, result.time, result.points  FROM athlete inner join result on athlete.id = result.id WHERE result.meeting_id = :id OrDER BY result.points DESC');
        $reponse->bindValue(':id',$_GET['meeting_id'],PDO::PARAM_INT);
        
        $i = 1;
        echo "<div class='resu'>";
        $executeR=$reponse->execute();
        echo '<p>Classement par course </p>';
        echo '<p>Résultat du meeting de ' .$_GET[""]. '</p>';
        
        while ($donnees = $reponse->fetch()){
        
            echo '<ul>';
                   echo 'A la place numéro ' . $i++ . ''. $donnees['firstname'] .' ';
                   echo $donnees['lastname'];
            echo '</ul>';
        }
    
    }
    public function classmnt(){
        include 'PDObdd.php';
         /* $firsname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
        $points = $_GET["points"];*/
        $resugene = $bdd->prepare('SELECT SUM(result.points) as total, athlete.lastname, athlete.firstname FROM result inner join athlete on result.athlete_id = athlete.id inner join meeting on result.meeting_id = meeting.id WHERE YEAR(CURRENT_DATE()) = 2017 GROUP BY athlete.id ORDER BY total DESC');
        $resugene->execute(array());
        while($donnees = $resugene->fetch()){
        
             echo'<ul>';
                          echo $donnees['firstname']." ";
                          echo $donnees['lastname'];
                          //echo $donnees['points'];
                          
             echo'</ul> ';    
        }   
    }
    public function lastmeet(){
        include 'PDObdd.php';
        try{

        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $reponse = $bdd->prepare("SELECT * FROM meeting WHERE YEAR(meeting.date) = 2017");
        $reponse->execute(array());
        $last = 0;
        while ($time = $reponse->fetch()){
               $dday = date("j");
               $month = date("n");
               $year = date("Y");
               $moment1 = $dday.'-'.$month.'-'.$year;
               $moment2 = $time['date'];
               if(strtotime($moment1) > strtotime($moment2)) {
                   $lastEvent[$last] = $time['name'];
                   $lastDate[$last] = $time['date'];
                   $last +=1;
                }
        }
           for($i=0; $i < $last; $i++){

            echo '<ul>'; 
                          echo "<h2>"."<a href='templateResult.php'>$lastEvent[$i]</a>"."</h2>";
                          echo $lastDate[$i]." ";
            echo '</ul>';
           }
        }
              catch (Exception $e){
              echo 'Exception: ',  $e->getMessage(), "\n";
              }
    }


 public function lastcourse(){
        include 'PDObdd.php';
        try{
            
        include 'PDObdd.php';
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $reponse = $bdd->prepare("SELECT * FROM meeting WHERE YEAR(meeting.date) = 2017");
        $reponse->execute(array());
        $last = 0;
        while ($time = $reponse->fetch()){
               $dday = date("j");
               $month = date("n");
               $year = date("Y");
               $moment1 = $dday.'-'.$month.'-'.$year;
               $moment2 = $time['date'];
               if(strtotime($moment1) > strtotime($moment2)) {
                   $lastEvent[$last] = $time['name'];
                   $lastDate[$last] = $time['date'];
                   $last +=1;
                }
        }
           for($i=0; $i < $last; $i++){

            echo '<ul>'; 
                          echo "<h2>"."<a href='index.php'>$lastEvent[$i]</a>"."</h2>";
                          echo $lastDate[$i]." ";
            echo '</ul>';
           }
        }
              catch (Exception $e){
              echo 'Exception: ',  $e->getMessage(), "\n";
              }
    }
}
?>