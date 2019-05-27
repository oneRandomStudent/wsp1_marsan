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
echo '<h2>Skapa ett nytt inlägg</h2>';
echo <<<POSTA
    <form class="" method="post">
        Rubrik: <br>
        <input type="text" name="headline"> <br>
        Användare: <br>
        <select name="user">
POSTA;
$sql = "SELECT * FROM Users";
foreach ($pdo->query($sql) as $row) {
    $id = $row['ID'];
    $name = $row['Username'];
    echo "<option value='{$id}'>{$name}</option>";
}
echo <<<POSTA
        </select><br>
        Text: <br>
        <textarea name="text" rows="10" cols="50" style="max-width: 550px; max-height: 550px;"></textarea> <br>
        <input type="submit" name="post" value="Skicka">
    </form>
POSTA;
echo $error;
echo '</div>';

include 'resources/includes/addPost.php';

//Inlcude Footer
require ('resources/views/footer.php');

?>
