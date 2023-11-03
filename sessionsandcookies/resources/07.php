<?php
session_start();

setcookie(
    'counter',
    '0',
    time() + 3600
);
if(isset($_COOKIE['counter'])) {
    $_COOKIE['counter']++;
} else {
    echo "Syntax error";
}
echo 'Number of page views:'. $_COOKIE['counter'];