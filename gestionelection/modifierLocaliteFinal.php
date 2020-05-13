<?php
    if(isset($_GET['id'])){
        extract($_GET);
    }
    include"connexion.php";
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    
    //ici je verifie d'abord si la localite n'existe pas déja dans la base
    $verifie = $connexion ->prepare("UPDATE localite set nom_localite=:nomL,superficie=:sup WHERE code_localite=".$_GET['id']."");
    $verifie->bindParam(":nomL",$nom_loc);
    $verifie->bindParam(":sup",$sup_loc);
    $verifie ->execute();
    header("Location: afficherModifierSupprimerLocalite.php");
?>