<?php
//Include Meta
require 'resources/includes/head.php';

//Include Header
require 'resources/views/header.php';
navigation($header);

//CONTENT
// det här är länkad med läs mer länken.
echo <<<CONTENT
<div class="content">
    <h2>{$title}</h2>
    <p class="author">Författare: {$author}</p>
    <p class="date">Datum:{$date} </p>
    <p class="message">{$message}</p>
    <hr>
    <h2>Kommentarer</h2>
CONTENT;
// <hr> står för hoirzon row
// require används för att lägga till saker i webbsidan som finns .
require 'resources/includes/comments.php';
foreach ($comment as $key => $value) {
    echo <<<COMMENT
        <hr>
        <h3>{$value['author']}</h3>
        <p>{$value['date']}</p>
        <p>{$value['text']}</p>

COMMENT;
}// <<<COMMENT lägger ute texten vid Kommenterna
echo "</div>";
//Inlcude Footer
require ('resources/views/footer.php');
?>
