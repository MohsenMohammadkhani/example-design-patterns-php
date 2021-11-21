<?php
namespace src\behaviour\state\order;

class Client
{
    public function publishPost()
    {
        $post = new Post('title post', 'text post');
        $post->moderate();
    }
}
