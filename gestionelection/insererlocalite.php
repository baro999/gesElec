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
    
    //ici je verifie d'abord si la localite n'existe pas déja dans la base
    $verifie = $connexion ->prepare("SELECT * FROM localite");
    $verifie ->execute();
    
        
            while($verifiemoi = $verifie ->fetch()){
                if($verifiemoi['nom_localite'] == $nom_loc){
                    include"ajouterlocalite.php";
                    echo"localite déja existante";
                    return 0;
                }
            }
            /*
            si php lis ce code ci-dessous ça veut dire que la localité
            n'est pas enregistrer alors je l'enregistre
        */
        $inserer = $connexion ->prepare("INSERT INTO localite(nom_localite,superficie)
                                        VALUES(:nom, :sup)");
        
        $inserer ->bindParam(':nom',$nom);
        $inserer ->bindParam(':sup',$sup);
        
        $nom = $nom_loc;
        $sup = $sup_loc;
        
        $inserer-> execute();
        header("Location: afficherModifierSupprimerLocalite.php");

?>