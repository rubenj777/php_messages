<?php

require_once "db.php";

$auteur = $_POST['auteur'];
$description = $_POST['description'];

$auteur = htmlspecialchars($auteur);
$description = htmlspecialchars($description);

if (isset($_POST['auteur']) && (isset($_POST['description'])) && (!empty($_POST['auteur'])) && (!empty($_POST['description']))) {

    $insertQuery = "INSERT INTO messages (auteur, description) VALUES ('$auteur', '$description')";

    mysqli_query($myConnect, $insertQuery);

    header('Location: index.php');
}
