<?php
declare(strict_types=1);
function sanitizeName(string $name):string
{
    $name = filter_var(trim(strtolower($name)),FILTER_SANITIZE_SPECIAL_CHARS);
    return htmlspecialchars($name);
}
function getQuotes(array $quotes):void
{
    foreach($quotes as $quote){?>    
        <h6><?=htmlspecialchars(filter_var($quote['character']));?></h6>
        <p><?=htmlspecialchars(filter_var($quote['quote']));?></p><?php
        }
        
};
function getErrors(array $errors):void
{
    foreach($errors as $error){?>
    <div class="alert alert-danger" role="alert">
        <?=$error?>
    </div><?php
    }
};

function removeAmpersand($string)
{
    if (strpos($string, "&")) {
        return false;
    }
    return $string;
}
// Hämta in eventuella värden från querystring och kolla om de är bra.
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    $username = htmlspecialchars($username);
    $username = trim($username);
    $username = strip_tags($username);

// Remove & 
$username = filter_var($username, FILTER_CALLBACK, ['options' => 'removeAmpersand']);
}
 
/* the function should sanitize, trim and convert the given name into lower case letters and return it. 
Require the functions.php file within our email generator and replace the repeated sanitization logic 
with our sanitizeName function. This is classic example of why and where functions come in handy. 
Now we only have to update the sanitization logic in one place instead of multiple lines. 
The output should look like in the previous exercise. */