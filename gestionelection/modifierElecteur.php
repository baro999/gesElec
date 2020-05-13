<?php
    include"headers.php";
?>
<?php

                if(!isset($_SESSION["nom_admin"])){
                        include"index.php";
                        ?><p style="color:black;
                                font-size:25px;
                                position: absolute;
                                top: 100px;
                                left: 350px;
                                font-weight: bold;
                                
                            ">
                            <?php $phrase="Admin non reconnu,veuillez vous connecter"; echo strtoupper($phrase);?>
                        
                        </p>
                        <?php
                        return 0;
        }
?>
<?php

    if(!$_SESSION['nom_admin']){
        include"index.php";
        return 0;
    }
?>
<?php
    if(isset($_GET['id'])){
        extract($_GET);
    }
    include"connexion.php";
    $lire = $connexion ->prepare("SELECT * FROM electeur");
     $lire ->execute();
     while($lire1 = $lire -> fetch()){
        
     if($_GET['id'] == $lire1['NumE']){
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="ensemble5.css">
    </head>
    <body>


        <div id="espaceLibre">
            <form method="POST" action="modifierElecteurFinal.php?id=<?php echo $_GET['id']?>">
                <fieldset>ELECTEUR</fieldset>
                <label for="prenom_elteur">Entrer le prenom electeur : </label><br>
                <input type="text" name="prenom_elteur" id="prenom_elteur" value="<?php echo $lire1['prenomE']?>" required><br>
                <label for="dat_naiss_el">Entrer la date de naissance electeur : </label><br>
                <input type="date" name="dat_naiss_elteur" value="<?php echo $lire1['date_naissance']?>" id=dat_naiss_elteur" required><br>
                <label for="lieu_naiss_elteur">Entrer le lieu de naissance electeur : </label><br>
                <input type="text" name="lieu_naiss_elteur" value="<?php echo $lire1['lieu_naissance']?>" id=lieu_naiss_elteur" required><br>
                <label for="genre_elteur">Entrer le genre electeur  </label><br>
                <input type="radio" name="genre_elteur" id="genre_elteur" value="" checked="">Masculin
                <input type="radio" name="genre_elteur" id="genre_elteur" value="F">Feminin<br>
                <label for="localite">Choisir la localite</label><br>
                <select name="localite" id="localite">
                    <?php
                        include"connexion.php";
                         $lire = $connexion->prepare("SELECT * FROM localite");
                         $lire -> execute();
                         while($lire1 = $lire -> fetch()){
                            ?>
                                <option><?php echo strtoupper($lire1['nom_localite'])?></option>
                                
                            <?php
                         }
                    ?>
                </select>
                <br>
                <input type="submit" name="modifier" value="modifier">
                <input type="reset" name="annuler" value="annuler">
            </form>
        </div>
        <?php
     }
     }
     
        ?>
    </body>
</html>