<?php

$errors = [];

// To fetch files we use the superglobal $_FILES. With the isset function we
// check if the avatar attribute is available in the $_FILES array or not.
if (isset($_FILES['avatar'])) {
    $avatar = $_FILES['avatar'];

    // We only want to allow the .png and .jpg files. We can compare the mime type
    // attribute for each uploaded file. Please visit this link to see a full
    // list of MIME types: https://www.sitepoint.com/mime-types-complete-list
    if (!in_array($avatar['type'], ['image/jpeg', 'image/png'])) {
        $errors[] = 'The uploaded file type is not allowed.';
    }

    // We only want to allow file sizes equal to or lower than two megabytes.
    // 2 Megabyte = 2097152 Bytes
    if ($avatar['size'] > 2097152) {
        $errors[] = 'The uploaded file exceeded the filesize limit.';
    }

    // If there are any errors in the array we should't upload the file.
    if (count($errors) === 0) {
        $destination = __DIR__ . '/uploads/' . $avatar['name'];

        // Using the move_uploaded_file function we can upload files from the
        // temporary path to a new destination. Remember to specify the full
        // path to where PHP should save the file on your system.
        move_uploaded_file($avatar['tmp_name'], $destination);

        // If everything went well, display a success message to the user.
        $message = 'The file was successfully uploaded!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading...</title>
    <style>
        body {
            font-family: Helvetica Neue;
        }

        p {
            color: white;
            padding: 10px;
        }

        p.error {
            background-color: tomato;
        }

        p.success {
            background-color: mediumseagreen;
        }
    </style>
</head>

<body>
    <!--
    If the $errors array is present and if it contains any errors we want to
    display those errors to the user. If not, we want to tell the user that
    their file was uploaded successfully. It is important to always tell the
    user what is happening (UX).
    -->
    <?php foreach ($errors as $error) : ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endforeach; ?>

    <?php if (isset($message)) : ?>
        <p class="success"><?php echo $message; ?></p>
    <?php endif; ?>

    <!--
    When uploading files in a <form> you need use a POST request.

    See the enctype attribute? Using this attribute we define the MIME type
    of the information sent to the server. We need to set this attribute to
    multipart/form-data in order to use the file input field type.
    -->
    <form action="/" method="post" enctype="multipart/form-data">
        <!--
        Using the accept attribute we can tell the input field what kind of
        file extensions we want to allow. Even though this is possible, we
        shouldn't rely on client-side validation. We should always validate
        the data in PHP as well. The client-side HTML could have been
        modified by the user.
        -->
        <div>
            <label for="avatar">Choose your avatar image to upload</label>
            <input type="file" accept=".jpg, .jpeg, .png" name="avatar" id="avatar" required multiple="multiple">
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>