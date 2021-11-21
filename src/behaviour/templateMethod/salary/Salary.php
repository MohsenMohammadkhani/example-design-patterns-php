<?php
namespace src\behaviour\templateMethod\salary;

abstract class Salary
{
    public function calculate()
    {
        return $this->getBaseSalary() + $this->extra();
    }

    protected function extra()
    {
        return 2000;
    }

    abstract protected function getBaseSalary(): int;
}
