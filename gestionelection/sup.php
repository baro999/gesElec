<?php
session_start();
    if(!$_SESSION['nom_admin']){
        include"index.php";
        return 0;
    }
?>
<?php
include"connexion.php";
$verifie = $connexion ->prepare("SELECT * FROM electeur");
    $verifie ->execute();
    
        
            while($verifiemoi = $verifie ->fetch()){
                $id = $verifiemoi['NumE'];
                    echo$verifiemoi['prenomE'];?><a href="supprimer.php?id=<?php echo $id?>">SUPPRIMER</a>
                <?php
                '<br>';
            }
            


?>