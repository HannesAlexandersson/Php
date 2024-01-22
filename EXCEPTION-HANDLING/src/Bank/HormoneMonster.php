<?php
declare(strict_types=1);
namespace App\Bank;
use App\Bank\Exceptions\InvalidNameException;

class HormoneMonster
{
  public function __construct(public string $name) {//if the name given to the monster is not one of the defined names an exception is thrown
    if($name != "Bob" || $name != "Connie" || $name != "Gavin" || $name != "Lorraine" || $name != "Maury" || $name != "Mona" || $name != "Rick" || $name != "Stan" || $name != "Tyler"){
      throw new InvalidNameException($name);
    }else{
    $this->name = $name;
    }
}

  
   
}