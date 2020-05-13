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

            
    /*après avoir vérifié le code de la localite
     j'insere mes informations dans la base*/
    
    $inserer = $connexion ->prepare("INSERT INTO
                                    voter(numE,code_election,nb_electeur,nb_votant,date_vote)
                                    VALUES(:numE, :codeE, :nbE, :nbV, :dateV)");
    
    $inserer ->bindParam(":numE",$p);
    $inserer ->bindParam(":codeE",$d);
    $inserer ->bindParam(":nbE",$li);
    $inserer ->bindParam(":nbV",$g);
    $inserer ->bindParam(":dateV",$c);
    
    
    $p = $numero_electeur;
    $d = $code_election;
    $li = $nb_electeur;
    $g = $nb_votant;
    $c = $date_vote;
    
    $inserer-> execute();
    header("Location: afficherModifierSupprimerVote.php");
?>