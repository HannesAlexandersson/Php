<?php
if (isset($_POST['search'])) {
    $search = trim($_POST['search']);
    $keywordToSearch = '%' .$search. '%';
    $db = new PDO('sqlite:nobel.db');
    $statement = $db->prepare('SELECT * FROM movies WHERE title LIKE :search');
    $statement->bindParam(':search', $keywordToSearch);
    $statement->execute();
    $movies = $statement->fetchAll();
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
        <input type="text" name="search" id="search" placeholder="Search for a movie">
        <button type="submit">Search</button>
    </form>
    <div class="result">
        <h3>RESULTS</h3>
        <ul><?php
            foreach ($movies as $movie){?>
            <li><?= htmlspecialchars($movie['title']) ?></li><?php
        }?>           
        </ul>
    </div>
</body>