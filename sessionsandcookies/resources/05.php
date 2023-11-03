<?php

$user = [
    'name' => 'Bertram Gilfoyle',
    'email' => 'gilfoyle@piedpiper.io',
    'password' => '$2y$10$Qx.ZsPJooxIqFDewbA9wS.fY6Nkp5qkmJynqkbwxmEyX5Q9Er5EBW',
];

// TODO: Implement the login logic here.

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
