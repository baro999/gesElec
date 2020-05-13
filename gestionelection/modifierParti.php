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
    include"connexion.php";
    if(isset($_GET['id'])){
        extract($_GET);
    }
    if(isset($_REQUEST['envoyer'])){
        extract($_REQUEST);
    }
    $verifie = $connexion->prepare("SELECT * FROM parti");
    $verifie ->execute();
    
    while($verifiemoi = $verifie ->fetch()){
        if($verifiemoi['num_parti'] == $_GET['id']){
            
    
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
            <form method="POST" action="modifierPartiFinal.php?id=<?php echo $_GET['id']?>">
                <fieldset>PARTI</fieldset>
                <label for="nom_pt">Entrer le nom parti : </label><br>
                <input type="text" name="nom_pt" id="nom_pt" value="<?php echo $verifiemoi['nom_parti']?>" required><br>
                <input type="submit" name="envoyer" value="ajouter">
                <input type="reset" name="annuler" value="annuler">
            </form>
        </div>
        <?php
        }
    }
        ?>
    </body>
</html>