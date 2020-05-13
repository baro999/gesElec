<?php
            session_start();
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
        <link rel="stylesheet" href="headers11.css">
        <meta name="viewport" content="width:device-width, initial-scale=1"> 
    </head>
    <body>
        
        <div class="pilierDroit">
            <p class="activité">activités</p>
            <ul type="circle" class="listePilierDroit">
                <li>Gestion des electeurs
                    <ul>
                        <li>ajouter</li>
                        <li>afficher</li>
                        <li>rechercher</li>
                    </ul>
                </li>
                <li>Gestion des types d'elections
                    <ul>
                        <li>ajouter</li>
                        <li>afficher</li>
                        <li>rechercher</li>
                    </ul>
                </li>
                <li>Gestion des Votes
                    <ul>
                        <li>ajouter</li>
                        <li>afficher</li>
                        <li>rechercher</li>
                    </ul>
                </li>
                <li>Gestion des partis
                    <ul>
                        <li>ajouter</li>
                        <li>afficher</li>
                        <li>rechercher</li>
                    </ul>
                </li>
                <li>Gestion des elections
                    <ul>
                        <li>ajouter</li>
                        <li>afficher</li>
                        <li>rechercher</li>
                    </ul>
                </li>
                <li>Gestion des localités
                    <ul>
                        <li>ajouter</li>
                        <li>afficher</li>
                        <li>rechercher</li>
                    </ul>
                </li>
                <li>Gestion des participation
                    <ul>
                        <li>ajouter</li>
                        <li>afficher</li>
                        <li>rechercher</li>
                    </ul>
                </li>
            </ul>
        </div>
        <a href="deconnexion_de_ma_page.php" class="boutonDeDeconnexion">DECONNEXION</a>
        <nav>
            <ul>
                <li><a href="ajouterelecteur.php"> electeurs</a>
                    <ul class="menuSecondaire">
                        <li><a href="ajouterelecteur.php">Ajouter des electeurs</a>
                        <li><a href="afficherModifierSupprimerElecteur.php">Afficher/Modifier/Supprimer des electeurs</a>
                        <li><a href="rechercherelecteur.php">Rechercher des electeurs</a>
                    </ul>
                </li>
                <li><a href="ajoutertypeelection.php">types elections</a>
                    <ul class="menuSecondaire">
                        <li><a href="ajoutertypeelection.php">Ajouter un type election</a>
                        <li><a href="afficherModifierSupprimerTypeElection.php">Afficher/Modifier/Supprimer un type election</a>
                        
                    </ul>
                </li>
                <li><a href="ajouterunvote.php"> votes</a>
                    <ul class="menuSecondaire">
                        <li><a href="ajouterunvote.php">Ajouter des votes</a>
                        <li><a href="afficherModifierSupprimerVote.php">Afficher/Modifier/Supprimer des votes</a>
                        
                    </ul>
                </li>
                <li><a href="ajouterparti.php">partis</a>
                    <ul class="menuSecondaire">
                        <li><a href="ajouterparti.php">Ajouter des partis</a>
                        <li><a href="afficherModifierSupprimerParti.php">Afficher/Modifier/Supprimer des partis</a>
                        
                    </ul> 
                </li>
                <li><a href="ajouterelection.php">elections</a>
                    <ul class="menuSecondaire">
                        <li><a href="ajouterelection.php">Ajouter des elections</a>
                        <li><a href="afficherModifierSupprimerElection.php">Afficher/Modifier/Supprimer des elections</a>
                        
                    </ul>
                </li>
                <li><a href="ajouterlocalite.php">localités</a>
                    <ul class="menuSecondaire">
                        <li><a href="ajouterlocalite.php">Ajouter des localités</a>
                        <li><a href="afficherModifierSupprimerLocalite.php">Afficher/Modifier/Supprimer des localités</a>
                        
                    </ul>
                </li>
                <li><a href="ajouterparticipation.php">participations</a>
                    <ul class="menuSecondaire">
                        <li><a href="ajouterparticipation.php">Ajouter des participations</a>
                        <li><a href="afficherModifierSupprimerParticipation.php">Afficher/Modifier/Supprimer des participations</a>
                        
                    </ul>
                </li>
            </ul>
        </nav>
    </body>
</html>