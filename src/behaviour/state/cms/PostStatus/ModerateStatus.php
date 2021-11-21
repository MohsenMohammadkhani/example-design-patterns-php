<?php
namespace src\behaviour\state\cms;

class ModerateStatus extends PostStatus
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
        $this->post->transitionTo(new PublishedStatus());
    }
}
