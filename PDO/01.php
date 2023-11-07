<?php
$db = new PDO("sqlite:startrek.db");
$statement = $db->query("SELECT * FROM characters WHERE id = 1");
$characters = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Introduction</title>
</head>

<body>
    <ul>
        <?php foreach ($characters as $character) : ?>
            <li><?php echo $character['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>