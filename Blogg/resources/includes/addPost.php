<?php

require 'db.php';

// skapar variabel så  att det ska  funka att använda i koden.
$poster = '';
$slug = '';
$headline = '';
$text = '';
$errorMsg = '';
// fall om man har inte skrivit någoting vid rubriken eller texten så kommer den här koden skicka det.
if (isset($_POST['post'])) {
    if (!empty($_POST['user'])) {
        $poster = $_POST['user'];
    } else {
        $errorMsg .= ' Ingen användare angiven!';
    }
    if (!empty($_POST['headline'])) {
        $headline = $_POST['headline'];
    } else {
        $errorMsg .= ' Ingen Rubrik angiven!';
    }
    if (!empty($_POST['text'])) {
        $text = $_POST['text'];
    } else {
        $errorMsg .= ' Ingen Text angiven!';
    }

    // if-sats
    $headline = $_POST['headline'];
    // den här koden kopplar slugify till det här filen.
    require 'slugify.php';
    $slug = url_slug($headline, array('transliterate' => true));
    // if-sats
    $text = $_POST['text'];

    if (empty($errorMsg)) {
        $sql = "INSERT INTO posts (UserID, Slug, Headline, Text)
        VALUES ({$poster}, '{$slug}', '{$headline}', '{$text}')";
        //id behöver inte '' vid {} dock resten behöver det.pdo;
//den här koden visar fall om meddelandet har skickas eller inte.
        $result = ($pdo->query($sql)) ? "Your message was sent!" : "There have been an error!";
        echo $result;
    } else {
        echo "<strong>$errorMsg</strong>";
    }
}




?>
