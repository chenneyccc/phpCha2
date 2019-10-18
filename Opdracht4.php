<?php
/**
 * Created by PhpStorm.
 * User: Chenn
 * Date: 14-10-2019
 * Time: 11:39
 */
/**
 * Created by PhpStorm.
 * User: Chenn
 * Date: 14-10-2019
 * Time: 11:18
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monkey</title>
</head>
<style>
    body{
        text-align: center;
        font-family: Arial;
        font-size: 20px;
        font-weight: bold;
    }
    li {
        list-style-type: none;
        font-family: "Comic Sans MS";
        color: orange;

    }



</style>
<body>
    <img src="img/monkey-business.jpg">
    <p>SELECT YOUR MONKEY!</p>
    <img src="img/monkey_swings.png" id="SWING">

</body>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$dbh = new PDO('mysql:host=localhost;port=8889;dbname=apen', 'root', 'root');
$leefgebied = $dbh->query('SELECT * from leefgebied');

?>
<ul>
    <?php
    foreach ($leefgebied as $leef) {
        echo "<li>".$leef['idleefgebied']." - ".$leef['omschrijving']."</li>";
    }

    ?>
</ul>
</html>