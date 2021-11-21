<?php
namespace src\behaviour\state\cms;

class DraftStatus extends PostStatus
{
    public function draft()
    {
        $this->post->transitionTo(new DraftStatus());
    }

    public function moderate()
    {
        $this->post->transitionTo(new ModerateStatus());
    }

    public function published()
    {
        throw new \Exception('error');
    }
}
