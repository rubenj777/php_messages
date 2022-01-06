<?php

require_once "db.php";

$myQuery = "SELECT * FROM utilisateurs";
$utilisateurs = mysqli_query($myConnect, $myQuery);

$userExists = false;
$loggedIn = false;

if (isset($_POST['username']) && (isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']))) {
    foreach ($utilisateurs as $utilisateur) {
        if ($_POST['username'] == $utilisateur['user']) {
            $userExists = true;
            $password = $utilisateur['password'];
            $_SESSION['username'] = $utilisateur['user'];
        }
    }
    if ($userExists) {
        if ($_POST['password'] == $password) {
            $_SESSION['connected'] = true;
            $loggedIn = true;
        }
    }
}

if (isset($_POST['logout'])) {
    unset($_SESSION['connected']);
}
