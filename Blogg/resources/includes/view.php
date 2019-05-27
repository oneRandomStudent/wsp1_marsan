<?php

//Give Active Navigation the class="highligt"
function navigation($highlight) {
    $start = '';
    $kontakt = '';
    $blogg = '';

    if($highlight == 'Start') {
        $start = 'class="highlight"';
    }
    elseif($highlight == 'Kontakt') {
        $kontakt = 'class="highlight"';
    }
    elseif($highlight == 'Posta') {
        $posta = 'class="highlight"';
    }
    elseif($highlight == 'Blogg') {
        $blogg = 'class="highlight"';
    }
// det är ett fel här 
    echo '
        <nav>
            <ul>
                <li><a ' . $start . ' href="index.php">Start</a></li>
			    <li><a ' . $blogg . ' href="index.php?page=blogg">Blogg</a></li>
			    <li><a ' . $posta. ' href="index.php?page=post">Posta</a></li>
			    <li><a ' . $kontakt . ' href="index.php?page=kontakt">Kontakt</a></li>
		    </ul>
	    </nav>';
}

//Function for Copyright
function echoYear(){
    $year = date('Y');

    if ($year == 2017) {
        echo 'copyright 2017';
    }
    else {
        echo 'copyright 2017-' . $year;
    }
}
// array_slice  delar upp text och väljer ord från 0 till 4
function shortText($longtext) {
    // $longtext = implode(' ', array_slice(explode(' ', $longtext), 0, 4))
    $longtext = explode(' ', $longtext);
    $longtext = array_slice($longtext, 0, 7); // array_slice delar upp orden mellan två valda nummer av ord.
    $longtext = implode(' ', $longtext);
    return $longtext;
} //return används för att $longtext

?>
