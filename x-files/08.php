<?php
$dir = 'recources/files';
$files = scandir($dir);
if (isset($_POST['mulder.txt'],$_POST['dana-scully.txt'])){
    $name = $_POST[$file];
     $data = file_get_contents('recources/files/'.$name);
     echo $data;
 }
 var_dump($data);
 

?>
<form action="" method="post"><?php
foreach($files as $key => $file){
    if ( str_contains($file,'.txt') !== false ){?> 
    <label for="<?=$file?>"><?=$file?></label><button type="submit" name="<?=$file?>" value="<?=$file?>">Select File</button><br><?php
    }
}?>
</form><?php


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