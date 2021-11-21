<?php
namespace src\creational\factoryMethod\publisher;

class Message
{
    private $title;
    private $image;
    private $content;

    public function __construct($title, $image, $content)
    {
        $this->title = $title;
        $this->image = $image;
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getContent()
    {
        return $this->content;
    }
}
