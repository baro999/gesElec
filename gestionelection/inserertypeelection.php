<?php
session_start();
    if(!$_SESSION['nom_admin']){
        include"index.php";
        return 0;
    }
?>
<?php
    include"connexion.php";
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    $verifie = $connexion->prepare("SELECT * FROM type_election");
    $verifie ->execute();
    
    while($verifiemoi = $verifie ->fetch()){
        if($verifiemoi['nom_type_election'] == $nom_tye){
            include"ajoutertypeelection.php";
            echo"ce type election existe déja";
            return 0;
        }
    }
    
    
    $inserer = $connexion->prepare("INSERT INTO type_election (nom_type_election)
                                   VALUES(:nom_te) ");
    $inserer ->bindParam(":nom_te",$nom_t_el);
    $nom_t_el = $nom_tye;
    
    $inserer ->execute();
    header("Location: afficherModifierSupprimerTypeElection.php");
    
?>