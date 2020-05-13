
<?php
session_start();
    if(!$_SESSION['nom_admin']){
        include"index.php";
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
            <?php
                include"headers.php";
            ?>
        </header>
        <div id="espaceLibre">
            <form method="POST" action="insererParticipation.php">
                <fieldset>PARCTICIPATION</fieldset>
                <label for="num_pt">Entrer le numero du parti : </label><br>
                <input type="text" name="num_pt" id="num_pt" required><br>
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
                <input type="number" name="nb_voix" id="nb_voix" required><br>
                <input type="submit" name="envoyer" value="VERIFIE-MOI">
                <input type="reset" name="annuler" value="annuler">
            </form>
        </div>
    </body>
</html>