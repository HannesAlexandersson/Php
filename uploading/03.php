<?php
/*Continue working on the previous exercise. We've implemented a way to upload the file but we haven't added any validation rules. 
Currently the user can upload huge files to our system. We want to prevent that. 
Add a if statement which checks the size of the uploaded image. 
If the file size is bigger than 2MB, echo the text below, else upload the image.
2000000*/
    
if (isset($_FILES['avatar'])) {
    $fileSize = $_FILES['avatar']['size'];// save the size into an variable for easier handling
    $avatar =   $_FILES['avatar'];// save the POST into an variable for easier handling

    // Check if the file size is within your allowed limit (in bytes).
    $maxFileSize = 2000000; 
    if ($fileSize <= $maxFileSize) {
        // The file size is within the allowed limit.
        move_uploaded_file($avatar['tmp_name'], __DIR__ . '/avatar.png');
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
    <form action="03.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="avatar">Choose a PNG image to upload</label>
            <input type="file" name="avatar" id="avatar" accept=".png" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>