
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index3.css";
    </head>
    <body>
        <h1><marquee>GESTION DES ELECTIONS</marquee></h1>
        <form method="POST" action="controleadmin.php">
            <label for="nom_ad">Entrer votre nom </label><br>
            <input type="text" name="nom_ad" id="nom_ad" required><br>
            <label for="prenom_ad">Entrer votre prenom </label><br>
            <input type="text" name="prenom_ad" id="prenom_ad" required><br>
            <label for="mp_ad">Entrer votre mot de passe admin </label><br>
            <input type="password" name="mp_ad" id="mp_ad" required><br>
            <input type="submit" name="envoyer" value="VERIFIE-MOI">
            <input type="reset" name="annuler" value="annuler">
        </form>
        <p class="paroleVotez">
            <marquee>
                Votez est un droit que vous devez faire valoir
            </marquee>
        </p>
    </body>
</html>