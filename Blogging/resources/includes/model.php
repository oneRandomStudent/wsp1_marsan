<?php



// Creating new arrays:
// Creates blank array.
// $blankArray = array();

//Creates an array with elements.
// $array = array("Hund", "Björn", "Katt");
// echo $array[0];
// echo $array[1];
// echo $array[2];
// Simple array for topics - Övning 4
// $model = array('Första Inlägget', 'Snart är det vår', 'Robin presenterar sig', 'Senaste inlägget');
//
// for ($i=0; $i <= count($model); $i++) {
//     echo $model[$i];
// }

// $stack = array("dog", "cat");
// array_push($stack, "horse", "duck");
// print_r($stack);

// $internet = array(
//     'memes' => array(
//         'doge',
//         'cats',
//         'birds'
//     ),
//     'normal jokes' => array(
//         'knock knock',
//         'what'
//     )
// );
// echo count($internet, COUNT_RECURSIVE);
// echo count($internet);

// 2D Associative array for full posts - Övning 9
// Nedan följer enkel pseudokod
// Array innehållande arrayer med individuell information
/*
    model
        länken (identifikator)
            Tittel
            Författare
            Datum
            Testen
*/

$model = array (
    'forsta-inlagget' => array(
        'title' => 'Första inlägget',
        'author' => 'Gugge',
        'date' => '2015-01-01',
        'text'=>'Här kommer det första inlägget i sin helhet. Välkommen till Labb 3! Här övar vi på PHP för att bli duktiga webbserverprogrammerare.'
    ),
    'snart-ar-det-var' => array(
        'title' => 'Snart är det vår',
        'author' => 'Gugge',
        'date' => '2015-02-24',
        'text'=>'Snart är det vår! Då övar vi på PHP för att bli duktiga webbserverprogrammerare.'
    ),
    'robin-presenterar-sig' => array(
        'title' => 'Robin presenterar sig',
        'author' => 'Robin',
        'date' => '2015-02-25',
        'text'=>'Robin är en trevlig prick som gärna övar på PHP för att som du bli en duktig webbserverprogrammerare.'
    ),
    'senaste-inlagget' => array(
        'title' => 'Senaste inlägget',
        'author' => 'Robin',
        'date' => '2015-02-26',
        'text'=>'Här kommer senaste inlägget i sin helhet. Här övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är tredje labben och andra labben i en serie labbar som tillsammans bygger ihop detta projekt. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.'
    )
);


?>
