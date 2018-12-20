<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//Content
echo <<<CONTENT
<div class="content">
    <h2>{$title}</h2>
    <p class="author">Författare: {$author}</p>
    <p class="date">Datum:{$date} </p>
    <p class="message">{$message}</p>
</div>
CONTENT;
//Inlcude Footer
require ('resources/views/footer.php');
?>
