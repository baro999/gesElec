<?php
function securisation($données){
  $données=trim($données);
  $données=stripslashes($données);
  $données=strip_tags($données);
  $données=htmlspecialchars($données);
  return $données;
} 
 ?>
 <?php
        $bdd = new PDO('mysql:host=localhost;dbname=ges-election', 'root', '');
       
        $modifier=$bdd->prepare('SELECT * FROM localite WHERE codeloc=:num ');

        $modifier->bindParam(':num',$_GET['codloc']);

        $modifier-> execute();
        $localite1=$modifier-> fetch();
  ?>
  <?php 

		$bdd = new PDO('mysql:host=localhost;dbname=ges-election', 'root', '');

	if (isset($_POST['env'])) {
		extract($_POST);
		$nameloc=securisation($_POST['nloc']);
		$suploc=securisation($_POST['sup']);
	if ($suploc>0) {

		$inserer2=$bdd -> prepare('UPDATE localite set nomloc=:noloc, superficie=:sup WHERE codeloc=:numloc');

        $inserer2->bindParam(':numloc',$_POST['idloc']);
		    $inserer2->bindParam(':noloc',$nameloc);
        $inserer2->bindParam(':sup',$suploc);

        $test=$inserer2->execute();
           if ($test) {
             echo "<center>MODIFICATION REUSSIE !!! <a href='parti1b.php'> retour </a></center>";
                }
            else{
              echo "<center>ECHEC DE LA MODIFICATION !!! <a href='parti1b.php'> retour </a></center>";
            } 
      }
    else{
    echo "<center>VALEUR SAISIE INCORRECTE !!!!! </center>";
    }
    }
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
    <link rel="stylesheet" type="text/css" href="pageges.css">
</head>
<body>
  <form method="POST">
	    <center>
		    <h2><label>localite</h2>
        <input type="hidden" name="idloc" value="<?= $localite1['codeloc'] ?>" required>
        <pre><label>nom localite</label>    <input type="text" name="nloc" value="<?= $localite1['nomloc'] ?>" required></pre>
        <pre><label>superficie</label>      <input type="number" name="sup" value="<?= $localite1['superficie'] ?>" required></pre>
		    <pre>     <input type="submit" value="envoyer modification" name="env"></pre>
	    </center>
  </form>
</body>
</html>
 <?php
 } 
?>