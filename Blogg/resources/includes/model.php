<?php
require 'resources/includes/db.php';

// $if koden
if($pdo) {
    $sql= "SELECT p.*, u.Username FROM posts AS p JOIN users AS u ON p.UserID = u.ID";
    $order = "DESC"; // $order är som en if kod som kollar fall om man har klickat på radio knappen.
    $searchText = '';

    if (isset($_POST['search'])) {
        $searchText = $_POST['searchtext'];//$searchText och $order blir kopplade till $_POST.
        $order = $_POST['order'];

        if (!empty($searchText)) {
            $sql .= " WHERE p.Text LIKE '%{$searchText}%'";
        }
// den här koden läger posten i ordning efter när den gjordes.
        $sql .= " ORDER BY Creation_time {$order}";
    } else {
        $sql .= " ORDER BY Creation_time {$order}";
    }

    $model = array();

    //fill our pre-defined $model-array.
    // foreach är det som gör att författarena posts visar upp på webbsidan.
    foreach ($pdo->query($sql) as $row){
        $model += array(
            $row['ID'] => array(
                'slug' => $row['Slug'],
                'title' => $row['Headline'],
                'author' => $row['Username'],
                'date' => $row['Creation_time'],
                'text'=> $row['Text']
             )
        );

    }

} else {
    // fall om något är fel  med $pdo så skickar koden istället ut en error message.
    print_r($pdo->errorinfo());
}
?>
