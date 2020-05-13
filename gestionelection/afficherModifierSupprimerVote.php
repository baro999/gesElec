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
                    $lire = $connexion ->prepare("SELECT * FROM voter");
                    $lire ->execute();
                    ?>
                <div id="HTMLtoPDF">
                    <table border="1">
                        <tr class="trDebut">
                            <td>ID du votant</td>
                            <td>Code election</td>
                            <td>Nombre d'electeurs</td>
                            <td>Nombre de vote</td>
                            <td>Date de vote</td>
                            <td>Modifier</td>
                            <td>Supprimer</td>
                        </tr>
                        <?php
                    while($lire1 =$lire ->fetch()){
                        ?><tr>
                                <td><?php echo $lire1['id_vote']?></td>
                                <td><?php echo $lire1['code_election']?></td>
                                <td><?php echo $lire1['nb_electeur']?></td>
                                <td><?php echo $lire1['nb_votant']?></td>
                                <td><?php echo $lire1['date_vote']?></td>
                                <td><a href="modifierVote.php?id=<?php echo $lire1['id_vote']?>">modifier</a></td>
                                <td><a href="supprimerVote.php?id=<?php echo $lire1['id_vote']?>">supprimer</a></td>
                        </tr>
                        <?php
                    }
                 ?>
                 <td colspan='7'><a href="#" onclick="HTMLtoPDF()">Telecharger</a></td>
                 </table>
                </div>
        </div>
    </div>
    <script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
</html>