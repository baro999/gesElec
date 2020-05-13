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
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    $verifie = $connexion->prepare("SELECT * FROM type_election");
    $verifie ->execute();
    
    while($verifiemoi = $verifie ->fetch()){
        if($_GET['id'] == $verifiemoi['code_type_election']){
        
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
            <form method="POST" action="modifierTypeElectionFinal.php?id=<?php echo $_GET['id']?>">
                <fieldset>TYPE ELECTION</fieldset>
                <label for="nom_tye">Entrer le nom du type election : </label><br>
                <input type="text" name="nom_tye" id="nom_tye" value="<?php echo $verifiemoi['nom_type_election']?>" required><br>
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