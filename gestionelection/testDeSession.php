<?php
session_start();
    if(!$_SESSION['nom_admin']){
        include"index.php";
        return 0;
    }
?>