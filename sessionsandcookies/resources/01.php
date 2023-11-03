<?php
session_start();
$_SESSION['title'] = 'Silicon valley';
if (isset($_SESSION['title'])) {
    echo "The title of the show is: " . $_SESSION['title'];
} else {
    echo "Syntax error";
}