<?php
/**
 * Description of connectClass
 *
 * @author alex
 */
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
                 header('Location: ../view/choiceManag.php');
             }
             else {
                    echo '<script> alert("Mauvais identifiant ou mot de passe");</script>';
                  }
            }      
         }
    }
}