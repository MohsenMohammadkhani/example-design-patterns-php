<?php

namespace src\behaviour\visitor\tax;

interface Visitor
{
    public function visitHighRange(Manager $manger);
    public function visitMiddleRange(TeamLeader $teamLeader);
    public function visitLowRange(Developer $developer);
}
