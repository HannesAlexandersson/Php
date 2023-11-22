<?php
declare(strict_types=1);
header('Content-Type: application/json');
/*
This file should show all horses at a plain GET-request, but 
only show one specific horse when the request contains a query as:
localhost:3000/02.php?id=283c2e.
Try it out by creating manual requests, by editing the URL and it's query
 string in the location field of the browser.
*/
$filename = "horse.json";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
$decoded = json_decode($contents, true);
fclose($handle);

if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    foreach($decoded['horses'] as $horse){
        if($horse['id'] == $id){
            print_r($horse);
        }
    }
}
else{
    echo json_encode($decoded['horses']);
}