<?php
namespace src\behaviour\templateMethod\salary;

class OnSiteSalary extends Salary
{
    protected function getBaseSalary(): int
    {
        return 5000;
    }
}
