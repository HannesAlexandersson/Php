<?php

declare(strict_types=1);

namespace App\Bank;

use Exception;

class AgeValidation extends Exception
{
    public function errorMessage()
    {
        return "is not old enough to drive.";//this one
    }

    public static function checkAge($userAge, $userName)// Static methods belong to the class itself, not to instances of the class. 
    {
        if ($userAge < 18) {
            throw new self(); //throws an exception from its own class ie the errormsg above here
        } else {
            echo "$userName is 18 or over and can drive.";//else the user is over 18 and can drive
        }
    }

}
