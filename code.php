<?php

$messages = [

    [
        "auteur" => "Luc",
        "description" => "salut "
    ],
    [
        "auteur" => "Patricia",
        "description" => " je sais pas quoi ecrire"
    ],
    [
        "auteur" => "Anna",
        "description" => "moi je sais"
    ],
    [
        "auteur" => "Bobby",
        "description" => "ce matin j'ai mangé une pomme"
    ],


];

$pageContent = "";

foreach ($messages as $message) {
    $pageContent .= "<hr />
    <h3>{$message['auteur']}</h3>
    <p>
     {$message['description']}
    </p>
    <hr />";
}
