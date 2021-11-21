<?php

namespace src\structural\adapter\Notification;

interface Notifier {
    public function send(string $message):void;
}
