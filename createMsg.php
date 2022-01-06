<?php

require_once "db.php";

$date = new DateTime();
$today = $date->format("d M Y à H\hi");

$auteur = $_POST['auteur'];
$description = $_POST['description'];

$auteur = mysqli_real_escape_string($myConnect, htmlspecialchars($auteur));
$description = mysqli_real_escape_string($myConnect, htmlspecialchars($description));

if (isset($_POST['auteur']) && (isset($_POST['description'])) && (!empty($_POST['auteur'])) && (!empty($_POST['description']))) {

    $insertQuery = "INSERT INTO messages (auteur, description, date) VALUES ('$auteur', '$description', '$today')";

    mysqli_query($myConnect, $insertQuery);

    header('Location: index.php');
}
