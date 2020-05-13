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
    if(isset($_GET['id'])){
        extract($_GET);
    }
    
    include"connexion.php";
    $modifier=$connexion->prepare("SELECT * FROM participer");
    
    $modifier->execute();
    while($modifier1 = $modifier->fetch()){
        if($modifier1['id_participer'] == $_GET['id']){
            
        
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="ensemble5.css">
    </head>
    <body>
        <header>
            
        </header>
        <div id="espaceLibre">
            <form method="POST" action="modifierParticipationFinal.php?id=<?php echo $_GET['id']?>">
                <fieldset>PARCTICIPATION</fieldset>
                <label for="num_pt">Entrer le numero du parti : </label><br>
                <input type="text" name="num_pt" id="num_pt" value="<?php echo $modifier1['num_parti']?>" required><br>
                <label for="nomE">Choisir l'election</label>
                <select name="nomE" id="nomE">
                    <?php
                        include"connexion.php";
                         $lire = $connexion->prepare("SELECT * FROM election");
                         $lire -> execute();
                         while($lire1 = $lire -> fetch()){
                            ?>
                                <option><?php echo strtoupper($lire1['nom_election'])?></option>
                                
                            <?php
                         }
                    ?>
                </select>
                <br>
                
                <label for="nb_voix">Entrer le nombre de voix : </label><br>
                <input type="number" name="nb_voix" id="nb_voix" value="<?php echo $modifier1['nbvoix']?>" required><br>
                <input type="submit" name="envoyer" value="modifier">
                <input type="reset" name="annuler" value="annuler">
            </form>
        </div>
        <?php
            }
         }
        ?>
    </body>
</html>