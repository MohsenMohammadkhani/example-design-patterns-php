<?php
namespace src\behaviour\templateMethod\reporter;

use Illuminate\Database\Eloquent\Collection;

abstract class UserReport
{

    public function generate(Collection $users)
    {
        $result = $this->prepare($users);
        $this->export($result);
    }

    private function prepare(Collection $users)
    {
        return $users->filter(function ($user) {
            return ($user->age > 18);
        });
    }

    abstract protected function export(Collection $users);

}
