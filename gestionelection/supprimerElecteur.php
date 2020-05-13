<?php
    include"connexion.php";
    
    $supprimer = $connexion->prepare('DELETE FROM electeur WHERE NumE='.$_GET['id'].'');
    $supprimer ->execute();
    header("Location: afficherModifierSupprimerElecteur.php");
?>