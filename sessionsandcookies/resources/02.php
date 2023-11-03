<?php
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
  } else {
    $_SESSION['counter']++;
  }
echo 'Number of page views:'. $_SESSION['counter'];


/*
Instead of using sessions we're going to use cookies together with the $_COOKIE superglobal.
 Rewrite the script to use cookies. Every time the user reloads the browser, set or increment
  a cookie called counter and display the number to the user. The output could look like the 
  snippet below
*/