<?php

namespace src\behaviour\state\cms;

class Post
{
    private $title;
    private $content;
    private $status;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->transitionTo(new DraftStatus());
    }

    public function transitionTo(PostStatus $status)
    {
        $this->status = $status;
        $this->status->setPost($this);
    }

    public function moderate()
    {
        $this->status->moderate();
    }

    public function draft()
    {
        $this->status->draft();
    }

    public function published()
    {
        $this->status->published();
    }
}
