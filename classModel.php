<?php
/**
 * Description of classModel
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
class IndexWeb {

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

class Connect {
    public function connect(){
        include 'PDObdd.php';
    //$pwdhach = hash("1234",$_POST["password"]);
    if(isset($_POST['pseudo'])){
        //voir filterinput
    $pseudo = htmlspecialchars($_POST['pseudo']);  
    $password = htmlspecialchars($_POST['password']);
         if(isset($_POST) && !empty($_POST['pseudo']) && !empty($_POST['password']))
         {
             try{
                $stmt = $bdd->prepare("SELECT * FROM user WHERE pseudo ='$pseudo' AND password ='$password'");
                $stmt->bindValue(':loginid', $_POST['pseudo']);
                $stmt->bindValue(':password', $_POST['password']);
                $stmt->execute();
              }
             catch (Exception $e){
                die('Erreur : '.$e->getMessage());
             }
             $donnees = $stmt->fetch(PDO::FETCH_ASSOC);
             $pass = filter_var(FILTER_SANITIZE_STRING, $donnees['password']);
             if ($_POST['password']== $donnees['password']){
                session_start();
                $_SESSION['pseudo'] = $donnees['pseudo'];
                $_SESSION['password'] = $donnees['password'];
                echo '<script> alert("Vous êtes connecté");</script>';
                 header('Location: choiceManag.php');
             }
             else {
                    echo '<script> alert("Mauvais identifiant ou mot de passe");</script>';
                  }
            }      
         }
    }
}
class Addrunn {
    public function ajoutrunn(){
        include 'PDObdd.php';
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
class Resultbydate {
    public function bydate(){       
            try {
                include'PDObdd.php';
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
            $reponse = $bdd->query('SELECT * FROM meeting');
            echo'<h3>Résultats par meeting</h3>';
            while ($donnees = $reponse->fetch()) {
                   $today = new DateTime();
                   $nn = new DateTime($donnees['date']);
                   if ($today > $nn) {
                       echo 'Résultats disponible';
                   } else {
                       echo 'Résultats à venir';
                       }
                echo'<h3><a href="resultView.php?event_id=' . $donnees["id"] . '&name=' . $donnees['name'] . '">' . $donnees['name'] . '</a></h3>';
                echo '<h4 class= "date"> le' . ' ' . $donnees['date'] . '</h4>';
                echo '<p class="des" > Information: ' . ' ' . $donnees['description'] . '</p>';
            }
    }
}
