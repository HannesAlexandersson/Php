<?php
declare(strict_types=1);
if(isset($_POST['first_name'],$_POST['last_name'])){
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $domain = '@facebook.com';
    $companyEmail = 'Your company email is: '.$firstName.'.'.$lastName.$domain;
}
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
            margin-bottom: 5px;
        }
    </style>
</head>

<body>    
    <?=$companyEmail?>
    <form action="05.php" method="post">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="last_name">Last name</label>
        <input type="text" name="last_name" id="last_name" required>

        <button type="submit">Generate email address</button>
    </form>
</body>

</html>