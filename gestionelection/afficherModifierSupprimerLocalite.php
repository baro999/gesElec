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
    <header>
            
        </header>
    <div id="espaceLibre">
        <div id="AMS">
                <?php
                    include"connexion.php";
                    $lire = $connexion ->prepare("SELECT * FROM localite");
                    $lire ->execute();
                    ?>
                <div id="HTMLtoPDF">
                    <table border="1">
                        <tr class="trDebut">
                            <td>Code localite</td>
                            <td>Nom localite</td>
                            <td>Superficie localite</td>
                            <td>Modifier localite</td>
                            <td>Supprimer localite</td>
                        </tr>
                    <?php    
                    while($lire1 =$lire ->fetch()){
                        ?><tr>
                                <td><?php echo $lire1['code_localite']?></td>
                                <td><?php echo $lire1['nom_localite']?></td>
                                <td><?php echo $lire1['superficie']?></td>
                                <td><a href="modifierLocalite.php?id=<?php echo $lire1['code_localite']?>">modifier</a></td>
                                <td><a href="supprimerLocalite.php?id=<?php echo $lire1['code_localite']?>">supprimer</a></td>
                            </tr>
                        
                        <?php
                    }
                 ?>
                 <td colspan='6'><a href="#" onclick="HTMLtoPDF()">Telecharger</a></td>
                 </table>
                </div>
        </div>
    </div>
    <script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
</html>