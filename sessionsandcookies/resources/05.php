<?php

$user = [
    'name' => 'Bertram Gilfoyle',
    'email' => 'gilfoyle@piedpiper.io',
    'password' => '$2y$10$Qx.ZsPJooxIqFDewbA9wS.fY6Nkp5qkmJynqkbwxmEyX5Q9Er5EBW',
];
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];// vi sätter värden av $_POST till variabler
    $password = $_POST['password'];// se ovan
    if($email == $user['email'] && password_verify($password, $user['password'])){// om email matchar user email och password matchar user password vi verify password
        $message = 'Welcome, Bertram Gilfoyle!';
    }else{
        $message = 'Whoops! Looks like you missed something. Please try again.';
    }
}



/*
 In a real world application you wouldn't have any hard coded data with password in your project.
Instead we're going to fetch the password from a HTTP POST request. Build a script which makes
it possible too login by verifying that the email and password matches the $users array.
Remember to sanitize the data from the request before you print it! Never trust the user!
Login with the following credentials:

gilfoyle@piedpiper.io
username-is-password
If the provided credentials matches the $user array, update the $message variable to say:

Welcome, Bertram Gilfoyle!
If the provided credentials doesn't match the $user array, update the $message variable to say:

Whoops! Looks like you missed something. Please try again.

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
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form action="05.php" method="post">
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
