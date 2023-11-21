<?php
/*
Copy the 04.php from the resources directory. We're going to build a script which lets you upload 
and display an image on the page. Implement logic to upload a .gif image of the actor Tom Hardy. 
When the image is uploaded save it as tom-hardy.gif on your filesystem. In the HTML, check if a 
file called tom-hardy.gif exists or not. If it does exist, display the image using a <img> element.
*/
if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    // Validera bildtyp
    $allowedTypes = array(IMAGETYPE_GIF);
    $detectedType = exif_imagetype($_FILES['image']['tmp_name']);

    if (!in_array($detectedType, $allowedTypes)) {
        exit('Felaktig bildtyp.');
    }

    // Validera filstorlek
    $maxFileSize = 5 * 1024 * 1024; // Max 5 MB

    if ($_FILES['image']['size'] > $maxFileSize) {
        exit('För stor fil.');
    }

    // Validera filnamn
    $filename = $_FILES['image']['name'];

    if (preg_match(`/\.(php|html|js|exe)$/i`, $filename)) {
        exit('Ogiltigt filnamn.');
    }

    // Rensa filnamnet
    $filename = 'tom-hardy.gif'; 

    // Spara filen på servern
    $uploadDirectory = __DIR__ . '/';
    $targetFile = $uploadDirectory . $filename;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        echo 'Bilden har laddats upp framgångsrikt.';
    } else {
        echo 'Ett fel inträffade vid uppladdningen.';
    }
    // Visa den uppladdade bilden
    $displayIMG = '<img src="'.$filename.'" alt="Uppladdad bild">';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
</head>

<body>
    <?php echo $displayIMG; ?>
    <form action="04.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="image">Please choose a GIF of Tom Hardy to upload</label>
            <input type="file" name="image" id="image" accept=".gif" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>