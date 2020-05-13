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
    $verifie = $connexion->prepare("SELECT * FROM election");
    $verifie ->execute();
    
    while($verifiemoi = $verifie ->fetch()){
        if($verifiemoi['nom_election'] == $nom_el){
            include"ajouterelection.php";
            echo"cet election existe déja";
            return 0;
        }
    }
    /*
        dans un premier temps je vais récuperer le code du type election
        avant d'inserer les données dans ma base
    */
    $verifie = $connexion ->prepare("SELECT * FROM type_election");
    $verifie ->execute();
    
        
            while($verifiemoi = $verifie ->fetch()){
                if($verifiemoi['nom_type_election'] == strtolower($codeTypeE)){
                   $code_l = $verifiemoi['code_type_election'];
                    break;
                }
            }
            
    /*après avoir vérifié le code de la localite
     j'insere mes informations dans la base*/
    
    $inserer = $connexion ->prepare("INSERT INTO
                                    election(nom_election,code_type_election)
                                    VALUES(:nomEo,:codeTe)");
    
    $inserer ->bindParam(":nomEo",$p);
    $inserer ->bindParam(":codeTe",$d);
    
    
    
    $p = $nom_el;
    $d = $code_l;
    
    
    $inserer-> execute();
    header("Location: afficherModifierSupprimerElection.php");
?>