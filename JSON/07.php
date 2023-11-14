<?php
declare(strict_types=1);
/*
Fetch all actors from the actors table, 
convert the array of actors into JSON and print them to the client. If you visit 
the page in the browser the JSON should be displayed in human readable format. 
Remember to change the content-type to application/json.
*/
// ny pdo för att koppla till databasen
$db = new PDO('sqlite:actors.db');
// förbereder en sql-sats som hämtar all data från db
$statement = $db->prepare('SELECT * FROM actors');
// kör sql-satsen
$statement->execute();
// hämtar all data från db och lägger i en array OBS behövs FETCH_ASSOC för att inte få dubbla dvs en indexerad version och en associerad version
$actors = $statement->fetchAll(PDO::FETCH_ASSOC);
// kodar om arrayen till json
$encodedActors = json_encode($actors);
// skriver ut json-data
header('Content-Type: application/json');
echo $encodedActors;