<?php
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    
    include"connexion.php";
    /*
        dans un premier temps je vais récuperer le code de l'election
        avant d'inserer les données dans ma base
    */
    $verifie = $connexion ->prepare("SELECT * FROM election");
    $verifie ->execute();
    
        
            while($verifiemoi = $verifie ->fetch()){
                if($verifiemoi['nom_election'] == strtolower($nomE)){
                   $code_l = $verifiemoi['code_election'];
                    break;
                }
            }
    $modifier=$connexion->prepare("UPDATE participer set code_election=:codeE,num_parti=:numP,nbvoix=:nbvoix WHERE id_participer=".$_GET['id']."");
    $modifier->bindParam(":codeE",$code_l);
    $modifier->bindParam(":numP",$num_pt);
    $modifier->bindParam(":nbvoix",$nb_voix);
    
    $modifier->execute();
    header("Location: afficherModifierSupprimerParticipation.php");
?>