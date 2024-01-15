<?php

class School
{
  private array $programs;
  public function __construct(public string $name)
  {
    
  }
  public function addProgram(string $program):void
  {
    $this->programs[] = $program;
  }

  public function getProgram():array
  {
    return $this->programs;
  }
}