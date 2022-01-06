<?php

require_once "db.php";

$toDelete = $_POST['delete'];

if (isset($_POST['delete']) && $_POST['delete']) {
    $deleteQuery = "DELETE FROM messages WHERE id = '$toDelete'";
    mysqli_query($myConnect, $deleteQuery);
    header('Location: index.php');
}



// if (isset($_POST['delete'])) {
//     if ($_POST['delete'] == $message['id']) {
//         $deleteQuery = "DELETE FROM messages WHERE id = '$toDelete'";

//         mysqli_query($myConnect, $deleteQuery);
//     }
//     header('Location: index.php');
// }
