<?php
/* Remove the validation checks and let us just 
focus on the filename for now. We're going to save the files in the following format: yymmdd-filename.png. 
If you upload a file named okja.png on May 19, 2017 the filename should be 170519-okja.png.
   */
    

if (isset($_FILES['avatar'])) {   
    $avatar =   $_FILES['avatar'];// save the POST into an variable for easier handling   
    $uploadDirectory = __DIR__; // save the directory that into an variable
  
    $timestamp = date('ymd'); // Format: yymmdd

    $newFilename = $timestamp . '-' . $avatar['name'];//concatinate the 2 into 1 name eg the date + the filename (231031-okja.png) OBS without the ['name'] it wont wotk corerctly ie it will save as date+array or something like that

    $uploadPath = $uploadDirectory . '/' . $newFilename;

    move_uploaded_file($avatar['tmp_name'], $uploadPath);
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
    <form action="05.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="avatar">Choose a PNG image to upload</label>
            <input type="file" name="avatar" id="avatar" accept=".png" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>