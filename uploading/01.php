<?php
/*We're going to die dump the data in the $_FILES superglobal.
 If the attribute avatar exists, die dump the value using the 
 die dump helper. In the example below we've uploaded a .png 
 image file. The output could look like the dump below.*/

 if (isset($_FILES['avatar'])) {
    $avatar = $_FILES['avatar'];
    die(var_dump($avatar));
}
else  {
    echo 'No image uploaded today';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <form action="01.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="avatar">Choose a PNG image to upload</label>
            <input type="file" name="avatar" id="avatar" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>