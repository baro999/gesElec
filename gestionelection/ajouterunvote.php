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
            <form method="POST" action="insererVote.php">
                <fieldset>VOTER</fieldset>
            <label for="numero_electeur">Entrer le numero electeur</label><br>
            <input type="number" name="numero_electeur" id="numero_electeur" required><br>
            <label for="code_election">Entrer le code de l'election </label><br>
            <input type="number" name="code_election" id="code_election" required><br>
            <label for="nb_electeur">Entrer le nombre d'electeur </label><br>
            <input type="number" name="nb_electeur" id="nb_electeur" required><br>
            <label for="nb_votant">Entrer le nombre de votant </label><br>
            <input type="number" name="nb_votant" id="nb_votant" required><br>
            <label for="date_vote">Entrer la date du vote</label><br>
            <input type="date" name="date_vote" id="date_vote" required><br>
            <input type="submit" name="envoyer" value="voter">
            <input type="reset" name="annuler" value="annuler">
        </form>
        </div>
    </body>
</html>