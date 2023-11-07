<?php
declare(strict_types=1);
if (isset($_GET['id'])) {
    $id = trim($_GET['id']);
    $db = new PDO('sqlite:startrek.db');    
    $statement = $db->prepare("DELETE FROM characters WHERE id = :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
    header('Location: index.php');
    exit;
}
/*
 When the <form> is submitted, the user will be taken to the delete.php file. 
 Fetch the character id from the $_GET query, connect to the startrek.db SQLite 
 database file, delete the character from the characters table and redirect the 
 user back to the index.php file.
*/
