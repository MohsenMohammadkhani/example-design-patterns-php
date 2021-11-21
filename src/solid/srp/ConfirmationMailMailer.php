<?php
namespace src\solid\srp;

class ConfirmationMailMailer
{
    private $confirmationMailFactory;
    private $mailer;

    /**
     * @param $confirmationMailFactory
     * @param $mailer
     */
    public function __construct(ConfirmationMailFactory $confirmationMailFactory, IMailer $mailer)
    {
        $this->confirmationMailFactory = $confirmationMailFactory;
        $this->mailer = $mailer;
    }

    /**
     * @param $user
     */
    public function sendTo(User $user): void
    {
        $message = $this->createMessageFor($user);
        $this->sendMessage($message);
    }

    /**
     * @param $user
     */
    private function createMessageFor(User $user): Message
    {
        return $this->confirmationMailFactory->createMessageFor($user);
    }

    /**
     * @param Message $message
     */
    private function sendMessage(Message $message)
    {
        $this->mailer->send($message);
    }

}
