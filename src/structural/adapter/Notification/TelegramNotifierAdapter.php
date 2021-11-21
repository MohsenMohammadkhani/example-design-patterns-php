<?php

namespace src\structural\adapter\Notification;

class TelegramNotifierAdapter implements Notifier {

    private $telegramApi;
    private  $chatID;

    /**
     * @param $message
     * @param $chatID
     */
    public function __construct(TelegramApi $telegramApi,int $chatID) {
        $this->telegramApi = $telegramApi;
        $this->chatID = $chatID;
    }

    public function send(string $message): void {
       $this->telegramApi->send($this->chatID,$message);
    }
}
