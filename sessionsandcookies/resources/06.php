<?php
session_start();

if(isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == true){
    
}

/*
Continue working on the previous exercise. We've built the login verification system.
 Next step is keep the user logged in using sessions. They should also be able to logout. 
 Create two new files called login.php and logout.php. Update the login <form> to post to 
 the new login file and move the login logic to it. If the credentials match, 
 add a new 
 session variable called authenticated and set it to true. 
 Add the message variable to 
 the session and tell the user if the login was successful. Redirect the user back to 
 the start page and display the following message:

You've successfully logged in Bertram Gilfoyle!
If the credentials didn't match, update the message session variable with an error message 
below and redirect the user back to the start page.

Whoops! Looks like you missed something. Please try again.
When the user is back on the start page and the authenticated session variable equals true. 
Hide the login form and present a logout link instead. The logout link should take the user to 
the logout.php file, logout the user by removing the authenticated session variable and redirect 
the user back to the start page.
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>
    <style>
        input {
            display: block;
            margin-bottom: 10px;
            min-width: 200px;
        }
    </style>
</head>

<body>
    <?php if (isset($_SESSION['message'])) : ?>
        <p><?php echo $_SESSION['message']; ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="hendriks@piedpiper.io">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Login</button>
    </form>
</body>

</html>
