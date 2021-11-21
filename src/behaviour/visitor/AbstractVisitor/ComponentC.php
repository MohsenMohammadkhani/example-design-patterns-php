<?php
namespace src\behaviour\visitor\AbstractVisitor;

class ComponentC implements Component
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitComponentC($this);
    }
}
