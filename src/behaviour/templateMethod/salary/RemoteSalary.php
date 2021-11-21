<?php
namespace src\behaviour\templateMethod\salary;

class RemoteSalary extends Salary
{
    protected function getBaseSalary(): int
    {
        return 10000;
    }
}
