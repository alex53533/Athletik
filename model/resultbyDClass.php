<?php
/**
 * Description of resultbyDClass
 *
 * @author alex
 */
class Resultbydate{
    public function bydate(){       
                include'model/PDObdd.php';
            $reponse = $bdd->query('SELECT * FROM meeting');
            echo'<h3>Résultats par meeting</h3>';
            while ($donnees = $reponse->fetch()) {
                   $today = new DateTime();
                   $nn = new DateTime($donnees['date']);
                   if ($today > $nn) {
                       echo'<div class="bdate">';
                       echo 'Résultats disponible';
                   } else {
                       echo'<div class="bdate">';
                       echo 'Résultats à venir';
                       }
                        
                echo '<h3><a class="b" href="view/resultView.php?event_id=' . $donnees["id"] . '&name=' . $donnees['name'] . '">' . $donnees['name'] . '</a></h3>';
                echo '<h3 class= "date"> le' . ' ' . $donnees['date'] . '</h3>';
                echo '<p class="des" > Information: ' . ' ' . $donnees['description'] . '</p>';
                    echo'</div>';
            }   
    }
    public function byview(){
         include'../model/PDObdd.php';
             $reponse = $bdd->prepare('SELECT athlete.*,result.time, result.points FROM athlete inner join result on athlete.id = result.id WHERE result.meeting_id = :id OrDER BY result.points DESC');
             $reponse->bindValue(':id', $_GET['event_id'], PDO::PARAM_INT);
             $i = 1;
             $executeIsok = $reponse->execute();
                    echo'<div class="result" ">';
                      echo'<h2>Classement du meeting de ' . $_GET["name"] . '</h2>';
                      echo'<a href="index.php"></a>';
                    echo'</div>';
                    echo'<table>';
                      echo'<tr>
                              <th> Rang </th>
                              <th> Runner </th>
                              <th> Points </th>
                              <th> Performance </th>';
                      echo'</tr>';
                      while ($donnees = $reponse->fetch()) {
                      echo'<tr>';
                      echo '<td>' . $i++ . '</td><td>' . $donnees['firstname'] . ' ' . $donnees['lastname'] . '</td><td>' . $donnees['points'] . '</td><td>' . $donnees['time'] . '</td>';
                      echo'</tr>';
                      }
                    echo'</table>';
    }
}