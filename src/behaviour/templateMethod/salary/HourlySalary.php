<?php
namespace src\behaviour\templateMethod\salary;

class HourlySalary extends Salary
{
    protected function getBaseSalary(): int
    {
        return 0;
    }
}
