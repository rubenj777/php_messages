<?php

require_once "db.php";


$toUpdate = htmlspecialchars($_POST['update']);
$content = htmlspecialchars($_POST['content']);

if (isset($_POST['update']) && $_POST['update']) {
    $updateQuery = "UPDATE messages SET description = '$content' WHERE id = '$toUpdate'";
    mysqli_query($myConnect, $updateQuery);
    header('Location: index.php');
}
