<?php
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    if(isset($_GET['id'])){
        extract($_GET);
    }
    include"connexion.php";
    
    $lire=$connexion->prepare("UPDATE voter set NumE=:nume,code_election=:code_e,nb_electeur=:nbE,nb_votant=:nbvt,date_vote=:date WHERE id_vote=".$_GET['id']."");
    
    $lire->bindParam(":nume",$numero_electeur);
    $lire->bindParam(":code_e",$code_election);
    $lire->bindParam(":nbE",$nb_electeur);
    $lire->bindParam(":nbvt",$nb_votant);
    $lire->bindParam(":date",$date_vote);
    $lire->execute();
    header("Location: afficherModifierSupprimerVote.php");
?>