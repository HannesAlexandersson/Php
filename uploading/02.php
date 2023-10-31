<?php
/*Continue working on the previous exercise. Now we're going to actually save the uploaded file.
 Update the avatar field to only accepts files in the .png format. When the form is submitted, 
 check if the $_FILES array contains the avatar file and save the image on your filesystem as
  avatar.png using the move_uploaded_file function. Try uploading a file and it should be saved 
  to the same directory as your upload script.*/
    
 if (isset($_FILES['avatar'])) {
    move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/avatar.png');
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
    <form action="02.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="avatar">Choose a PNG image to upload</label>
            <input type="file" name="avatar" id="avatar" accept=".png" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>