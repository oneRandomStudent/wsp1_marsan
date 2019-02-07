<?php
$host = 'localhost';
$dbname = 'blogg';
$user = 'admin';
$password = 'Y3bBa4ogClkhB67W';
//define varible with attriubtes for our PDO-object.
$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
//$pdo koden gör en attriubt med koden ovanför...
$pdo = new PDO($dsn, $user, $password, $attr);

// $if koden
if($pdo) {
    // Define my SQL-var
    $sql= "SELECT p.Slug, p.Headline, u.Username, p.Creation_time, p.Text FROM posts AS p JOIN users AS u ON p.UserID = u.ID ORDER BY Creation_time DESC";
    //Define $model array.
    $model = array();

    //fill our pre-defined $model-array.
// foreach är det som gör att författarena posts visar upp på webbsidan.
    foreach ($pdo->query($sql) as $row){
        $model += array(
            $row['Slug'] => array(
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
