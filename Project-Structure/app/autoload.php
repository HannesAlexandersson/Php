<?php
declare(strict_types=1);
session_start();
// Set the default timezone to Coordinated Universal Time.
date_default_timezone_set('UTC');
// Set the default character encoding to UTF-8.
mb_internal_encoding('UTF-8');
// Include the helper functions.
require __DIR__ . '/functions.php';
// Fetch the global configuration array.
$config = require __DIR__ . '/config.php';
// Setup the database connection.
/* $database = new PDO($config['database_path']); */
// Your database path configuration in config.php since its not working properly to require it from config.php
$databasePath = sprintf('sqlite:%s/database/database.db', __DIR__);

try {
    // Create PDO connection
    $pdo = new PDO($databasePath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'PDO Error: ' . $e->getMessage();
    exit;
}
