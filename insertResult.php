<?php
$bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8','root','mvb94');
include 'PDObdd.php';
    $time=$_POST['time'];
    $points=$_POST['points'];
    $athlete_id=$_POST['athlete_id'];
    $meeting_id=$_POST['meeting_id'];
$req = $bdd->prepare("UPDATE result SET time = :time, points = :points, athlete_id = :athlete_id, meeting_id = :meeting_id");
$req->execute(array(
	'time' => $_GET['time'],
	'points' => $_GET['points'],
	'athlete_id' => $_GET['athlete_id'],
	'meeting_id' => $_GET['meeting_id']));
?>