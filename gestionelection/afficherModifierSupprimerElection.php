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
                    $lire = $connexion ->prepare("SELECT * FROM election");
                    $lire ->execute();
                    ?>
                <div id="HTMLtoPDF">
                    <table border="1">
                        <tr class="trDebut">
                            <td>Code Election</td>
                            <td>Nom Election</td>
                            <td>Code Type Election</td>
                            <td>Modifier</td>
                            <td>Supprimer</td>
                        </tr>
                    <?php
                    while($lire1 =$lire ->fetch()){
                        ?><tr>
                            <td><?php echo $lire1['code_election']?></td>
                            <td><?php echo $lire1['nom_election']?></td>
                            <td><?php echo $lire1['code_type_election']?></td>
                            <td> <a href="modifierElection.php?id=<?php echo $lire1['code_election']?>">modifier</a></td>
                            <td><a href="supprimerElection.php?id=<?php echo $lire1['code_election']?>">supprimer</a></td>
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