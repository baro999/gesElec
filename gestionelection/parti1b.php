<?php 
		$bdd = new PDO('mysql:host=localhost;dbname=ges-election', 'root', '');

        $afficher=$bdd->prepare("SELECT * FROM localite");
        $afficher->execute();
        $localite=$afficher->fetchall();
 ?>
  <?php
        $bdd = new PDO('mysql:host=localhost;dbname=ges-election', 'root', '');
        $supprimer=$bdd->prepare('DELETE FROM localite WHERE codeloc =:num ');

        $supprimer-> bindParam(':num',$_GET['codloc']);

        $supprimer->execute();
         
 ?> 
  <?php
session_start();
if (!(isset($_SESSION['nom']))) {
    header("location:geselection2.php");
 }
 else {  
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="pageges.css">
 </head>
 <body>
 	<h2> LOCALITE </h2>
    <ul>
     	<?php foreach ($localite as $localite) : ?>
     	<li>
  <?= $localite['codeloc'] ?> - <?= $localite['nomloc'] ?> - <?= $localite['superficie'] ?>       <a href="parti1b.php?codloc=<?= $localite['codeloc'] ?> ">supprimer</a> 
         <a href="modifier.php?codloc=<?= $localite['codeloc']?> ">modifier</a>
     	</li>
    <?php endforeach; ?>
     </ul>
 </body>
 </html>
  <?php
 } 
?>