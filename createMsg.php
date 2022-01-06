<?php

require_once "db.php";
require_once "auth.php";

$date = new DateTime("Europe/Paris");
$today = $date->format("d M Y à H\hi");



$description = mysqli_real_escape_string($myConnect, htmlspecialchars($_POST['description']));


if (isset($_SESSION['connected']) && $_SESSION['connected']) {
    $auteur = $_SESSION['username'];
} else {
    $auteur = mysqli_real_escape_string($myConnect, htmlspecialchars($_POST['auteur']));
    if (isset($_POST['auteur']) && (isset($_POST['description'])) && (!empty($_POST['auteur'])) && (!empty($_POST['description']))) {

        $insertQuery = "INSERT INTO messages (auteur, description, date) VALUES ('$auteur', '$description', '$today')";

        mysqli_query($myConnect, $insertQuery);
    }
    header('Location: index.php');
}
