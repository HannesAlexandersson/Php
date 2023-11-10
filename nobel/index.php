<?php
/*
SELECT DISTINCT awarding_board.name, year.year FROM awarding_board INNER JOIN AwardingBoard_Category_Year ON awarding_board.id = "AwardingBoard_Category_Year".awarding_board INNER JOIN year ON "AwardingBoard_Category_Year"."year" = "year".id WHERE year.id = 183;

*/
if (isset($_POST['search'])) {
    $search = trim($_POST['search']);
    $keywordToSearch = '%' .$search. '%';
    $db = new PDO('sqlite:nobel.db');
    $statement = $db->prepare('SELECT * FROM year WHERE year.year = :search');
    $statement->bindParam(':search', $keywordToSearch);
    $statement->execute();
    $years = $statement->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>  
    <link rel="Stylesheet" href="styling.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">  
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="search" id="search" placeholder="Search for a year">
        <button type="submit">Search</button>
    </form>
    <div class="result">
        <h3>RESULTS</h3>
        <ul><?php
            foreach ($years as $year){?>
            <li><?= htmlspecialchars($year['year']) ?></li><?php
        }?>           
        </ul>
    </div>
</body>