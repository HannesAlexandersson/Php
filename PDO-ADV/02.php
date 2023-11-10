<?php
/*
 We want to create a page for a specific director. It is important for SEO to be able to 
 fetch specific resources on the world wide web. Using the id parameter from the query string, 
 fetch the director from the database based on the given id with the bindParam function. 
 If the director was found in the database print their name in an <h1> element and their 
 biography in an <p> element. If the director wasn't found, print the following text:
 Not Found
The director wasn't found in the database.
*/
// ?? is the shorthand for an if statement with an isset check. If the ID value
// doesn't exist we give it a default value `1`.
$id = $_GET['id'] ?? 1;
$errorMsg = "Not FoundThe director wasn't found in the database.";
$db = new PDO('sqlite:tmdb.db');
$statement = $db->prepare("SELECT * FROM directors WHERE id = :id");
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();
$director = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <?php if ($id !== 1){?>
    <h1><?= $director['first_name'] ?> <?= $director['last_name'] ?></h1>
    <p><?= $director['biography'] ?></p>
    <?php 
    }else 
    { ?>
        <p><?= $errorMsg; ?></p>
    <?php }?>
</body>

</html>