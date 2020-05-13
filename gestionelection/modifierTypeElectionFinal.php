<?php
    if(isset($_GET['id'])){
        extract($_GET);
    }
    include"connexion.php";
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    $verifie = $connexion->prepare("UPDATE type_election set nom_type_election=:nomTe WHERE code_type_election=".$_GET['id']."");
    $verifie->bindParam(":nomTe",$nom_tye);
    $verifie ->execute();
    header("Location: afficherModifierSupprimerTypeElection.php");

?>