<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//Content

    // code...
//ASC gör att post som är gamlast ligger  längst upp  men vid DESC så är det tvätt om.
echo '<div class="content">';
echo '<h2>Alla blogginlägg</h2>';
echo <<<SEARCH
    <form class="" method="post">
        Sortera efter: <br>
        <input type="radio" name="order" value="ASC"> Stigande<br>
        <input type="radio" name="order" value="DESC" checked> Fallande<br>
        Sök efter:
        <input type="text" name="searchtext"> <br>
        <input type="submit" name="search" value="search">
    </form>
SEARCH;
echo $error;
// foreach är bättre att använd än for koden.
    // code...

foreach ($model as $key => $value) {

    // Förkortar texten som står i inlägget.
    $shorttext = shortText($value['text']);

    //lägga <<< efter echo så kan man göra den längre
    // Inleder en längre echo.
    echo <<<POST
    <div class="post">
        <h3>{$value['title']}</h3>
        <p class="author">Författare: {$value['author']}</p>
        <p class="date">Datum: {$value['date']}</p>
        <p class="message">{$shorttext} <a href="index.php?page=blogg&post={$key}">Läs mer</a></p>
    </div>
POST;
// Avslutar vår långa echo
}
echo '</div>';

//Inlcude Footer
require ('resources/views/footer.php');

?>
