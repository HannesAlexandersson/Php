<?php
/* Update the if statement to check if the upload image type isn't equal
   to image/png, echo the text below, else upload the image.
   
   The image file type is not allowed.
   */
    

if (isset($_FILES['avatar'])) {
    $fileSize = $_FILES['avatar']['size'];// save the size into an variable for easier handling
    $avatar =   $_FILES['avatar'];// save the POST into an variable for easier handling   
    $maxFileSize = 2000000;  // Check if the file size is within your allowed limit (in bytes).
    $fileType = strtolower(pathinfo($avatar, PATHINFO_EXTENSION));//save the fiiletype in a variable
    if ($fileSize <= $maxFileSize) {
        if ($fileType === 'png'){
            // The file size is within the allowed limit AND the correct fileformat.
            move_uploaded_file($avatar['tmp_name'], __DIR__ . '/avatar.png');
        }
        else {
            echo 'The image file type is not allowed.';
        }
    } else {
        // The file size exceeds the allowed limit.
        echo "The uploaded file exceeded the file size limit. Maximum size allowed is 2 MB.";
    }
} else {
    // No file was uploaded.
    echo "Please select a file to upload.";
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
    <form action="04.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="avatar">Choose a PNG image to upload</label>
            <input type="file" name="avatar" id="avatar" accept=".png" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>