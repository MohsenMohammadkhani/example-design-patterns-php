<?php
namespace src\behaviour\visitor\tax;

class Manager implements Employee
{

    public function salary(): float
    {
        return 5000;
    }
    public function accept(Visitor $visitor)
    {
        return $visitor->visitHighRange($this);
    }
}
