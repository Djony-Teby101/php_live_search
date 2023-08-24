<?php
#creation de la dbase.
$dns="mysql:host=localhost;dbname=testeur";
$user="root";
$pass="";

try {
   $db=new PDO($dns,$user,$pass);
} catch (PDOException $e) {
    echo "connexion echouée !".$e->getMessage();
    die();
}
?>