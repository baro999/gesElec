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
            <form method="POST" action="insererlocalite.php">
                <fieldset>LOCALITE</fieldset>
                <label for="nom_loc">Entrer votre localite : </label><br>
                <input type="text" name="nom_loc" id="nom_loc" required><br>
                <label for="sup_loc">Entrer la superfice : </label><br>
                <input type="number" name="sup_loc" id="sup_loc" required><br>
                <input type="submit" name="envoyer" value="ajouter">
                <input type="reset" name="annuler" value="annuler">
            </form>
        </div>
    </body>
</html>