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
        <meta charset="uft-8">
        <link rel="stylesheet" href="page_acceuil.css">
    </head>
    <body>
        <p>BIENVENUE ADMIN<?php  echo $_SESSION["nom_admin"]?></p>
        <nav>
            <ul>
                <li><a href="ajouterelecteur.php">AJOUTER UN ELECTEUR</a></li>
                <li><a href="ajouterparti.php">AJOUTER UN PARTI</a></li>
                <li><a href="ajoutertypeelection.php">AJOUTER UN TYPE ELECTION</a></li>
                <li><a href="ajouterlocalite">AJOUTER UNE LOCALITE</a></li>
                <li><a href="ajouterparticipation.php">AJOUTER UNE PARTCIPATION</a></li>
                <li><a href="ajouterelection.php">AJOUTER UNE ELECTION </a></li>
                <li><a href="ajouterunvote.php">AJOUTER UN VOTE</a></li>
                <li><a href="#">AJOUTER UN UN ADMINISTRATEUR</a></li>
            </ul>
        </nav>
    </body>
</html>