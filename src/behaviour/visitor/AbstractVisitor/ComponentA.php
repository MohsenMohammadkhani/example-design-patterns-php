<?php
namespace src\behaviour\visitor\AbstractVisitor;

class ComponentA implements Component
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitComponentA($this);
    }
}
