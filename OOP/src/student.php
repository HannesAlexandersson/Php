<?php

class Student extends Person 
{
  public array $grades;

  public function addGrade(string $grade):void
  {
    $this->grades[] = $grade;
  }
}