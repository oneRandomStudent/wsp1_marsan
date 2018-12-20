<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//Content

    // code...

echo '<div class="content">';
echo '<h2>Alla blogginlägg</h2>';
echo $error;
// foreach är bättre att använd än for koden.
    // code...

foreach ($model as $key => $value) {

    // Förkorta texten som står i inlägget.
    $text = $value['text'];
    $text = shortText($text);
    // Inleder en längre echo.
    echo <<<POST
    <div class="post">
        <h3>{$value['title']}</h3>
        <p class="author">Författare: {$value['author']}</p>
        <p class="date">Datum: {$value['date']}</p>
        <p class="message">{$text} <a href="index.php?page=blogg&post={$key}">Läs mer</a></p>
    </div>
POST;
// Avslutar vår långa echo
}
echo '</div>';

//Inlcude Footer
require ('resources/views/footer.php');

?>
