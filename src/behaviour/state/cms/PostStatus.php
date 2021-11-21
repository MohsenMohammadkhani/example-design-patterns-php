<?php
namespace src\behaviour\state\cms;

abstract class PostStatus
{
    private $post;

    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    abstract public function draft();
    abstract public function moderate();
    abstract public function published();
}
