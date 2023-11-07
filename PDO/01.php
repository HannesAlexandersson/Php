<?php
try {
    // Create a PDO connection to your database
    $db = new PDO("mysql:host=localhost;dbname=your_database_name", "your_username", "your_password");

    // Prepare and execute a query to fetch the first 5 names
    $stmt = $db->prepare("SELECT name FROM users LIMIT 5");
    $stmt->execute();

    // Fetch the results as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close the database connection
    $db = null;
} catch (PDOException $e) {
    // Handle any connection or query errors
    echo "Connection error: " . $e->getMessage();
}


// Print the names in an ordered list
if (!empty($results)) {
    echo '<ol>';
    foreach ($results as $row) {
        echo '<li>' . htmlspecialchars($row['name']) . '</li>';
    }
    echo '</ol>';
} else {
    echo 'No names found.';
}