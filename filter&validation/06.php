<?php
declare(strict_types=1);
if(isset($_POST['first_name'],$_POST['last_name'])){    
    if ($_POST['first_name'] === '' || $_POST['last_name'] === '') {
        echo 'The name field is missing.';
    }
    if (filter_var($_POST['first_name'],FILTER_SANITIZE_SPECIAL_CHARS) === false && filter_var($_POST['last_name'],FILTER_SANITIZE_SPECIAL_CHARS) === false){
        echo 'inavlid character used for email creation!';
    }else{
        $fullName = trim(strtolower($_POST['first_name'])).'.'.trim(strtolower($_POST['last_name']));        
        $domain = '@facebook.com';
        $companyEmail = 'Your company email is: '.$fullName.$domain;        
    }
    
}
echo $fullName;
  

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
    <?=$companyEmail ?>
    <form action="06.php" method="post">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="last_name">Last name</label>
        <input type="text" name="last_name" id="last_name" required>

        <button type="submit">Generate email address</button>
    </form>
</body>

</html>