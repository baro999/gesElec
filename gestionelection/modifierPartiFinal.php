<?php
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    include"connexion.php";
    if(isset($_GET['id'])){
        extract($_GET);
    }
    $modifier = $connexion->prepare("UPDATE parti set nom_parti=:nomP WHERE num_parti=".$_GET['id']."");
    $modifier->bindParam(":nomP",$nom_pt);
    $modifier->execute();
    header("Location: afficherModifierSupprimerParti.php");
?>