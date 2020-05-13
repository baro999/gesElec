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
    $verifie = $connexion->prepare("SELECT * FROM parti");
    $verifie ->execute();
    
    while($verifiemoi = $verifie ->fetch()){
        if($verifiemoi['nom_parti'] == $nom_pt){
            include"ajouterparti.php";
            echo"ce parti existe déja";
            return 0;
        }
    }
    
    
    $inserer = $connexion->prepare("INSERT INTO parti (nom_parti)
                                   VALUES(:nom_parti) ");
    $inserer ->bindParam(":nom_parti",$nom_parti);
    $nom_parti = $nom_pt;
    
    $inserer ->execute();
    header("Location: afficherModifierSupprimerParti.php")
    
?>