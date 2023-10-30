<?php
$dir = 'recources/files';

$files = scandir($dir);
foreach($files as $key => $file){
    echo $file;?><br><?php
    
}
//echo file_get_contents('recources/files/dana-scully.txt');
/*Create a new file and name it 07.php. In this exercise we're going scan directories for files.
 Copy the files directory from the resources directory. Create a script which scans the files directory
  for files and prints a list of filenames using a foreach loop. The output should look like the list below.
*/