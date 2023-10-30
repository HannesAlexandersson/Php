<?php
$dir = 'recources/files';
$files = scandir($dir);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08-09</title>
    <link rel="Stylesheet" href="style.css">
</head>

<body>
<right>
    <ul id="nav"><?php
    foreach($files as $key => $file){
        if ( str_contains($file,'.txt') !== false ){?> 
    <li><a href="recources/files/<?=$file?>" target="if1"><?=$file?></a></li><br><?php    
        }
    }?>
    </ul>
</right>
<left>
    <iFrame name="if1"></iframe">
</left>
</body>
<?php
/*
 Continue working on the previous exercise. Exclude any file in the list which doesn't have the txt file extension. 
 The files in the list should be clickable. When the user clicks on a filename the content of that text file should be 
 visible in the browser. Please see the screenshot below for reference. The design in the screenshot is built using the CSS
  framework Bootstrap. You're free to style it however you like.

There are three states of content which should be presented for the user:

If the user hasn't yet selected any file to view, print the text "Please select the text file you want to view".
If the user has selected a text file, print the content of the file.
If the user has selected a text file but it doesn't exist, print the text "The text file no-valid-name.txt wasn't found".
*/