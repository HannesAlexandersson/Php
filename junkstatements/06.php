<?php 
declare(strict_types=1);

if (isset($_GET['email'], $_GET['password'])) {
    // We start by fetching the values from the $_POST array and save them to
    // their own variables.
    $email = $_GET['email'];
    $password = $_GET['password'];

    echo "Your email address is ".$email." and your password is ".$password;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
    <style>
        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form action="06.php" type="get">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="password"></label>
        <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php /*
Create a new file and name it 05.php. We're going to build simple login form. Add a new <form> element and two <input> fields 
for email and password. Remember to add <label> elements for each <input> field. Then add an <button> element with the type submit.
     When the form is submitted, use the isset function to check if both the email and password attributes exists. If they do exist, 
     use the print_r function to print the values. The output could look like the text below.
     */ ?>