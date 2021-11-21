<?php
namespace src\behaviour\templateMethod\reporter;

use App\Models\User;

class Client
{
    private $reporter;

    public function __construct(UserReport $reporter)
    {
        $this->reporter = $reporter;
    }

    public function exportUsers()
    {
        $this->reporter->generate(User::all());
    }

}
