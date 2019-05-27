<?php
require 'db.php';

// $if koden
if($pdo) {
    // Define my SQL-var
    $sql= "SELECT c.*, u.Username FROM comments AS c JOIN users AS u ON c.UserID = u.ID WHERE c.PostID = {$postID} ORDER BY Creation_time DESC";
    //Define $model array.
    $comment = array();

    //fill our pre-defined $model-array.
// foreach är det som gör att författarena posts visar upp på webbsidan.
    foreach ($pdo->query($sql) as $row){
        $comment += array(
            $row['ID'] => array(
                'author' => $row['Username'],
                'date' => $row['Creation_time'],
                'text'=> $row['Text']
            )
        );
    }

 // $komment = array();
 // foreach ($pdo->query() as $row) {
 //     // code...
 // }
} else {
    // fall om något är fel  med $pdo så skickar koden istället ut en error message.
    print_r($pdo->errorinfo());
}
?>
