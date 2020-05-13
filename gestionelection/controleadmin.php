<?php
    session_start();
    include"connexion.php";
    if(isset($_POST ['envoyer'])){
        extract($_POST);
    }
    $cherche = $connexion ->prepare ("SELECT * FROM administrateur");
    $cherche ->execute();
    
    while($cherche_ad = $cherche -> fetch()){
        if($cherche_ad['nom_admin'] == $nom_ad && $cherche_ad['prenom_admin']== $prenom_ad
                    && $cherche_ad["mot_de_passe_admin"] == $mp_ad){           
           
            $_SESSION['id_admin'] = $cherche_ad['id_admin'];
            $_SESSION['nom_admin'] = $cherche_ad['nom_admin'];
            $_SESSION['prenom_admin'] = $cherche_ad['prenom_admin'];
            $_SESSION['mot_de_passe_admin'] = $cherche_ad['mot_de_passe_admin'];
            header("Location: headers.php");
            return 0;
        }
    }
    echo"admin non reconnu";
?>