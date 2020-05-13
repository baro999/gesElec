<?php
session_start();
    if(!$_SESSION['nom_admin']){
        include"index.php";
        return 0;
    }
?>
<?php
    include"connexion.php";
    
    $supprimer = $connexion->prepare('DELETE FROM localite WHERE code_localite='.$_GET['id'].'');
    $supprimer ->execute();
    header("Location: afficherModifierSupprimerLocalite.php");
?>