<?php
namespace src\behaviour\visitor\tax;

class TeamLeader implements Employee
{

    public function salary(): float
    {
        return 3500;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitMiddleRange($this);
    }
}
