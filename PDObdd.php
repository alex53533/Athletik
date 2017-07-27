<?php
        try
            {
            $bdd = new PDO('mysql:host=localhost;dbname=at;charset=utf8', 'root', 'mvb94');
            $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }catch (Exception $e)
            {
             die('Erreur : ' . $e->getMessage());}
?>