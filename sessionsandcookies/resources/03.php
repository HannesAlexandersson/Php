<?php
session_start();
setcookie(
    'title',
    'Silicon Valley',
    time() + 3600
);
if(isset($_COOKIE['title'])) {
    print_r( $_COOKIE['title']);
} else {
    echo "Syntax error";
}


/*
Now we're going to look at how we can create cookies with PHP. 
Create a new file and name it 03.php. Create a new cookie with 
the setcookie function. The name of the cookie should be title 
and the value Silicon Valley. The cookie should live for an hour
 from now. If the cookie exists in the superglobal $_COOKIE, print 
 the value. Visit the developer tools in the browser to debug your
  cookie. The output should look like the text below.
  */