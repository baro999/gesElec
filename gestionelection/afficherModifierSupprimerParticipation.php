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
                    $lire = $connexion ->prepare("SELECT * FROM participer");
                    $lire ->execute();
                    ?>
                    <div id="HTMLtoPDF">
                    <table border='1'>
                        <tr class="trDebut">
                            <td>Id du  participant</td>
                            <td>Code de l'election</td>
                            <td>Numéro du parti</td>
                            <td>Nombre de voix</td>
                            <td>Modifier</td>
                            <td>Supprimer</td>
                        </tr>
                        <?php
                    while($lire1 =$lire ->fetch()){
                        ?><tr>
                            <td><?php echo $lire1['id_participer']?></td>
                            <td><?php echo $lire1['code_election']?></td>
                            <td><?php echo $lire1['num_parti']?></td>
                            <td><?php echo $lire1['nbvoix']?></td>
                            <td><a href="modifierParticipation.php?id=<?php echo $lire1['id_participer']?>">modifier</a></td>
                            <td><a href="supprimerParticpation.php?id=<?php echo $lire1['id_participer']?>">supprimer</a></td>
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