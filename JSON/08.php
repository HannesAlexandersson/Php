<?php
/*Fetch the id variable from the query string. 
If there is no id in the query string, use 1 
as a default. Fetch the actor in the database 
by the given ID, convert the actor array into a 
JSON string and print it to the client.
*/
if (isset($_GET['id'])) { //hämtar id från querystring om den finns
    $id = $_GET['id'];
} else {//annars används defaultvärdet 1
    $id = 1;
}
// ny pdo för att koppla till databasen
$db = new PDO('sqlite:actors.db');
// förbereder en sql-sats som hämtar actorn med id från querystringen från db
$statement = $db->prepare('SELECT * FROM actors WHERE id = :id');
// binder värdet från querystringen till :id
$statement->bindParam(':id', $id, PDO::PARAM_INT);
// kör sql-satsen
$statement->execute();
// hämtar all data från db och lägger i en array OBS behövs FETCH_ASSOC för att inte få dubbla dvs en indexerad version och en associerad version
$actor = $statement->fetch(PDO::FETCH_ASSOC);
// kodar om arrayen till json
$encodedActors = json_encode($actor);
// skriver ut json-data
header('Content-Type: application/json');
echo $encodedActors;