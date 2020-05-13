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
            <?php
                if(isset($_POST['envoyer'])){
                    extract($_POST);
                }
                include"connexion.php";
                $lire = $connexion ->prepare("SELECT * FROM electeur");
                $lire ->execute();
                $trouve=0;
                ?>
                <table border="1">
                    <tr>
                        <td colspan="4">La recherche a donner</td>
                    </tr>
                    <tr>
                        <td>Prenom</td>
                        <td>Date de naissance</td>
                        <td>Lieu de naissance</td>
                        <td>Code de la localite</td>
                    </tr>
                    <?php
                while($lire1 = $lire ->fetch()){
                    if($lire1['prenomE'] == $search || $lire1['lieu_naissance'] == $search){
                        $trouve = 1;
                        ?>
                        <tr>
                            <td><?php echo  strtoupper($lire1['prenomE'])?></td>
                            <td><?php echo  $lire1['date_naissance']?></td>
                            <td><?php echo  $lire1['lieu_naissance']?></td>
                            <td><?php echo  $lire1['codeLoc']?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </table>
                <?php
                if($trouve !=1){
                    ?>
                    <table border="1">
                        <tr>
                            <td>Aucune recherche trouvé</td>
                        </tr>
                    </table>
                    <?php
                }
            ?>
        </div>

    </body>
</html>