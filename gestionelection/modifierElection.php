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
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    
    include"connexion.php";
    $verifie = $connexion->prepare("SELECT * FROM election");
    $verifie ->execute();
    
    while($verifiemoi = $verifie ->fetch()){
        if($verifiemoi['code_election'] == $_GET['id']){
            
     
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
            <form method="POST" action="modifierElectionFinal.php?id=<?php echo $_GET['id']?>">
                <fieldset>ELECTION</fieldset>
                <label for="nom_el">Entrer le nom d'election : </label><br>
                <input type="text" name="nom_el" id="nom_el" value="<?php echo $verifiemoi['nom_election']?>" required><br>
                <label for="typeE">Entrer le type election</label>
                <select name="codeTypeE" id="typeE">
                    <?php
                        include"connexion.php";
                         $lire = $connexion->prepare("SELECT * FROM type_election");
                         $lire -> execute();
                         while($lire1 = $lire -> fetch()){
                            ?>
                                <option><?php echo strtoupper($lire1['nom_type_election'])?></option>
                                
                            <?php
                         }
                    ?>
                </select>
                <br>
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