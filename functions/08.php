<?php
function isPalindrome($value){
    $key = strrev($value);
    if ( $value === $key){
        return true;
    }
    else {
        return false;
    }
}
var_dump(isPalindrome('racecar')); // bool(true)