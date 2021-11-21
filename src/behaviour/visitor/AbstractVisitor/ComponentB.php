<?php
namespace src\behaviour\visitor\AbstractVisitor;

class ComponentB implements Component
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitComponentB($this);
    }
}
