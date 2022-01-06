<?php
require_once "db.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $editMode = false;
    if (isset($_GET['edit'])) {
        $editMode = true;
    }
    $id = htmlspecialchars($_GET['id']);
    $selectQuery = "SELECT messages.id, messages.auteur, messages.description, messages.date FROM messages WHERE id = '$id'";
    $result = mysqli_query($myConnect, $selectQuery);
    $message = $result->fetch_assoc();
} else {
    $myQuery = "SELECT * FROM messages";
    $messages = mysqli_query($myConnect, $myQuery);
}
