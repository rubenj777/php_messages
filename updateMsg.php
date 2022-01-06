<?php

require_once "db.php";

$date = new DateTime();
$today = $date->format("d M Y à H\hi");

$toUpdate = mysqli_real_escape_string($myConnect, htmlspecialchars($_POST['update']));
$content = mysqli_real_escape_string($myConnect, htmlspecialchars($_POST['content']));
$edited = false;


if (isset($_POST['update']) && $_POST['update']) {
    $edited = true;
    $updateQuery = "UPDATE messages SET description = '$content', date = '$today' WHERE id = '$toUpdate'";
    mysqli_query($myConnect, $updateQuery);
    header('Location: index.php');
}
