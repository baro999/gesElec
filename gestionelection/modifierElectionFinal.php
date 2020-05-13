
<?php
include"connexion.php";
if(isset($_GET['id'])){
    extract($_GET);
}
if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    $verifie = $connexion ->prepare("SELECT * FROM type_election");
    $verifie ->execute();
    
        
            while($verifiemoi = $verifie ->fetch()){
                if($verifiemoi['nom_type_election'] == strtolower($codeTypeE)){
                   $code_l = $verifiemoi['code_type_election'];
                    break;
                }
            }
    
    $verifie = $connexion->prepare("UPDATE election set nom_election=:nE,code_type_election=:codeTe WHERE code_election=".$_GET['id']."");
    $verifie->bindParam(":nE",$nom_el);
    $verifie->bindParam(":codeTe",$code_l);
    $verifie ->execute();
    
    header("Location: afficherModifierSupprimerElection.php");
?>