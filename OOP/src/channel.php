<?php

class Channel 
{  

  public function __construct(public string $name, public string $type)
  { 
    if($type !== 'text' || $type !== 'voice')
    {
      throw new Exception('Invalid channel type [the-type-parameter].');
    }else 
    {
      $this->type = $type;
    }
  }
}