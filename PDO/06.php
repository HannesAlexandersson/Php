<?php
/*
We want to find out which actor belongs to which character. 
Create a new file and name it 06.php and connect to the startrek.db 
SQLite database. Fetch 5 actors and characters with an INNER JOIN in a 
single select query and order by the characters table name column. 
The output should look like the snippet below.
*/
$db = new PDO('sqlite:startrek.db');
$statement = $db->query('SELECT characters.name, actors.name AS actor_name FROM characters INNER JOIN actors ON characters.actor_id = actors.id ORDER BY characters.name ASC LIMIT 5');
$characters = $statement->fetchAll(PDO::FETCH_ASSOC);
?> 
<div>
    <?php     
    foreach ($characters as $character){?>
        <p><?php echo $character['name']; ?> played by <?php echo $character['actor_name']; ?></p>
</div>
<?php } ?>