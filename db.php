<?php


// tous les éléments qui permettent la connection à la base de donnée
$host = "localhost";
$username = "messageboard";
$password = "ruben";
$db = "messageboard";

// méthode qui permet de se connecter : besoin de tous les éléments
$myConnect = mysqli_connect($host, $username, $password, $db);
if (!$myConnect) {
    echo "pb connection";
}
