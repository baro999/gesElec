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
    
    $supprimer = $connexion->prepare('DELETE FROM voter WHERE id_vote='.$_GET['id'].'');
    $supprimer ->execute();
    header("Location: afficherModifierSupprimerVote.php");
?>