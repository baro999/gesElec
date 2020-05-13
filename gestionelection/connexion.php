<?php
    $login ="root";
    $mp = "";
    $host = "localhost";
    try{
        $connexion = new PDO("mysql::host=$host;dbname=gestionelection;charset=utf8",$login,$mp);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }
    catch(Exception $e){
        echo" ERREUR : ".$e->getMessage();
    }
?>