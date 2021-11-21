<?php
namespace src\behaviour\visitor\tax;

class Client
{
    public function tax(Manager $manager)
    {
        $manager->accept(new TaxCalculator());
    }
}
