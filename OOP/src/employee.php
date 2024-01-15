<?php

class Employee extends Person
{
  public string $title;
  private int $yearlySalary;

  public function setYearlySalary(int $salary):void
  {
    $this->yearlySalary = $salary;
  }

  public function getMonthlySalary():float
  {
    $monthlySalary = $this->yearlySalary / 12;
    return $monthlySalary;
  }
}