<?php
namespace src\solid\srp;

class Message
{
    private $subject;
    private $body;
    private $emailAddress;

    /**
     * @param $subject
     * @param $body
     * @param $emailAddress
     */
    public function __construct($subject, $body, $emailAddress)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->emailAddress = $emailAddress;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
}
