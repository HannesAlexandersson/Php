<?php
/*
 Add the default <html> tree to the file. Add an <form>, <input> field 
 and submit <button> element to the HTML markup. 
 Implement a script to upload .gif files. 
 The files must be of the MIME type image/gif and have a 
 maximum size of 3MB. 
 The files should be saved to a directory called uploads.
*/

if (isset($_FILES['gif'])){//first create all necessary datastructures
    $gif = $_FILES['gif'];
    $fileSize = $_FILES['gif']['size'];
    $maxFileSize = 3000000;
    $fileExtension = pathinfo($gif['name'], PATHINFO_EXTENSION);
    $timestamp = date('ymd');
    $newFilename = $timestamp . '-' . $gif['name'];
    $uploadDirectory = __DIR__.'/uploads';
    $uploadPath = $uploadDirectory . '/' . $newFilename;
    // Check if the 'uploads' directory exists, and create it if not
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
        //go ahead with the checks to accept the file or not
        if($fileExtension === 'image' || $fileExtension === 'gif'){
            if($fileSize < $maxFileSize){
                move_uploaded_file($gif['tmp_name'],$uploadPath);
            }else
            {
                echo 'file to big! max size 3mb';
            }
        }else
        {
            echo 'Wrong filetype! Only Gifs allowed!!!';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="gif" id="gif" accept=".gif" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>