<?php
declare(strict_types=1);

if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo 'Your email address is '.$email.' and your password is '.$password.' !';
}
?>
<form action="06.php" method="post">
    <label for="email">Email:</label>
            <input type="email" name="email">
    <label for="password" name="password">password:</label>
        <input type="password" name="password">
    <button type="submit">Submit</button>
</form>



<?php


/*
Continue working on the previous exercise. Instead of using print_r we're going to tell the user about 
their login credentials in a very secure manner. Assign the email and password attributes into two new 
variables called $email and $password. Print the text below using the variables. The output could look like the text below.

Your email address is versace@yrgo.se and your password is v3rs4c3!

*/