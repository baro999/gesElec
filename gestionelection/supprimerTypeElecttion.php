<?php
session_start();
    if(!$_SESSION['nom_admin']){
        include"index.php";
        return 0;
    }
?>
<?php
    echo $_GET['id'];
    include"connexion.php";
    
    $supprimer = $connexion->prepare('DELETE FROM type_election WHERE code_type_election='.$_GET['id'].'');
    $supprimer ->execute();
    header("Location: afficherModifierSupprimerTypeElection.php");
?>