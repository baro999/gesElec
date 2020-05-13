<?php
        if(isset($_POST['modifier'])){
            extract($_POST);
        }
        echo $_GET['id'];
        include"connexion.php";
        $verifie = $connexion ->prepare("SELECT * FROM localite");
        $verifie ->execute();
    
        
            while($verifiemoi = $verifie ->fetch()){
                if($verifiemoi['nom_localite'] == strtolower($localite)){
                   $code_l = $verifiemoi['code_localite'];
                    break;
                }
            }
        
        $modif = $connexion ->prepare("UPDATE electeur set prenomE=:p,date_naissance=:dte,lieu_naissance=:le
                                      ,genre=:ge,codeloc=:cod WHERE NumE=".$_GET['id']."");
        $modif ->bindParam(":p",$prenom_elteur);
        $modif ->bindParam(":dte",$dat_naiss_elteur);
        $modif ->bindParam(":le",$lieu_naiss_elteur);
        $modif ->bindParam(":ge",$genre_elteur);
        $modif ->bindParam(":cod",$code_l);
        $modif ->execute();
        header("Location: afficherModifierSupprimerElecteur.php");
    ?>