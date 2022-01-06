<?php

require_once "db.php";


$toUpdate = mysqli_real_escape_string($myConnect, htmlspecialchars($_POST['update']));
$content = mysqli_real_escape_string($myConnect, htmlspecialchars($_POST['content']));


if (isset($_POST['update']) && $_POST['update']) {
    $updateQuery = "UPDATE messages SET description = '$content' WHERE id = '$toUpdate'";
    mysqli_query($myConnect, $updateQuery);
    header('Location: index.php');
}
