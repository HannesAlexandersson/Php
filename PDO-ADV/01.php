<?php
/*
In this exercise we're going to get familiar with prepared statements and stored procedures. 
Using the prepare and execute functions, fetch all directors from the database and print the 
directors names in an <ul> list wrapped in an <a> tag. When the user clicks on one of the directors 
names they should be taken to the directors TMDb page.
*/
$db = new PDO('sqlite:tmdb.db');
$statement = $db->prepare('SELECT * FROM directors ORDER BY first_name');
$statement->execute();
$directors = $statement->fetchAll()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <h1>Directors</h1>
    <p>If you want to read more about a director, please click on their names below:</p>
    <ul>
        <?php foreach ($directors as $director) { ?>
            <li>
                <a href="<?= $director['tmdb_url'] ?>"><?= $director['first_name'] ?> <?= $director['last_name'] ?></a>
            </li><?php } ?>
    </ul>
</body>

</html>