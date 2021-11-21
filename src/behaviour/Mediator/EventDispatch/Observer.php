<?php
namespace src\behaviour\Mediator\EventDispatch;

interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}
