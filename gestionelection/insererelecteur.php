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
        dans un premier temps je vais récuperer le code de la localite
        avant d'inserer les données dans ma base
    */
    $verifie = $connexion ->prepare("SELECT * FROM localite");
    $verifie ->execute();
    
        
            while($verifiemoi = $verifie ->fetch()){
                if($verifiemoi['nom_localite'] == strtolower($localite)){
                   $code_l = $verifiemoi['code_localite'];
                    break;
                }
            }
            
    /*après avoir vérifié le code de la localite
     j'insere mes informations dans la base*/
    
    $inserer = $connexion ->prepare("INSERT INTO
                                    electeur(prenomE,date_naissance,lieu_naissance,genre,codeloc)
                                    VALUES(:prenom, :dat, :lieu, :genre, :cod
                                    )");
    
    $inserer ->bindParam(":prenom",$p);
    $inserer ->bindParam(":dat",$d);
    $inserer ->bindParam(":lieu",$li);
    $inserer ->bindParam(":genre",$g);
    $inserer ->bindParam(":cod",$c);
    
    
    $p = $prenom_elteur;
    $d = $dat_naiss_elteur;
    $li = $lieu_naiss_elteur;
    $g = $genre_elteur;
    $c = $code_l;
    
    $inserer-> execute();
    header("Location: afficherModifierSupprimerElecteur.php");
?>