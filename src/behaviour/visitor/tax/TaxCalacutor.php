<?php
namespace src\behaviour\visitor\tax;

class TaxCalculator implements Visitor
{
    public function visitHighRange(Manager $manger)
    {
        return $manger->salary() * 0.5;
    }
    public function visitMiddleRange(TeamLeader $teamLeader)
    {
        return $teamLeader->salary() * 0.35;
    }
    public function visitLowRange(Developer $developer)
    {
        if ($developer->salary() <= 300) {
            return 0;
        }
        return $developer->salary() * 0.15;
    }
}
