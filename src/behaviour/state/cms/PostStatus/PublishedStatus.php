<?php
namespace src\behaviour\state\cms;

class PublishedStatus extends PostStatus
{
    public function draft()
    {
        $this->post->transitionTo(new DraftStatus());
    }

    public function moderate()
    {
        throw new \Exception('error');
    }

    public function published()
    {
        throw new \Exception('error');
    }
}
