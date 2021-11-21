<?php

namespace src\behaviour\visitor\AbstractVisitor;

interface Component
{
    public function accept(Visitor $visitor);
}
