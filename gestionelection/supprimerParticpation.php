
<?php
session_start();
    if(!$_SESSION['nom_admin']){
        include"index.php";
        return 0;
    }
?><?php
    echo $_GET['id'];
    include"connexion.php";
    
    $supprimer = $connexion->prepare('DELETE FROM participer WHERE id_participer='.$_GET['id'].'');
    $supprimer ->execute();
    header("Location: afficherModifierSupprimerParticipation.php");
?>