<?php
declare(strict_types=1);
/*
Create a new file and name it 01.php. Using the setcookie function create a new 
cookie called title and add the value The Revenant. The cookie should last an hour 
before expiring. Run the script in your browser and visit the cookies section in the 
developer tools to check if the cookie was created or not.
*/
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie('title','the revenant', time() + 3600);