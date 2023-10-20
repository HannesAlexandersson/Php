<?php
// www verkar inte vara valid, medans http är valid. Så man måste ha protokoll med om man inte kör någon flag?
$url = 'www.social.com';
//$url = 'https://social.network';
if (filter_var($url, FILTER_VALIDATE_URL) !== false){
    echo 'The URL is valid!';
}else {
    echo 'The URL is not valid!';
}