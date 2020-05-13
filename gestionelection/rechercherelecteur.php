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
            <form method="POST" action="rechercherElecteurFinal.php">
                <fieldset>Rechercher</fieldset>
                <label for="recherche">Nom ou Lieu de naissance à rechercher</label>
                <input type="text" name="search" id="recherche">
                <input type="submit" name="envoyer" value="rechercher" >
            </form>
        </div>

    </body>
</html>