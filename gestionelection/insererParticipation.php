<?php
session_start();
    if(!$_SESSION['nom_admin']){
        include"index.php";
        return 0;
    }
?>
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
            
    /*après avoir vérifié le code de la localite
     j'insere mes informations dans la base*/
    
    $inserer = $connexion ->prepare("INSERT INTO
                                    participer(code_election,num_parti,nbvoix)
                                    VALUES(:codeE,:numP,:nbv)");
    
    $inserer ->bindParam(":codeE",$p);
    $inserer ->bindParam(":numP",$d);
    $inserer ->bindParam(":nbv",$a);
    
    
    
    $p = $code_l;
    $d = $num_pt;
    $a = $nb_voix;
    
    
    $inserer-> execute();
    header("Location: afficherModifierSupprimerParticipation.php");
?>