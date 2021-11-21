<?php

namespace App\Http\Controllers;

use src\solid\lsp\DropBoxFile;

class TestController extends Controller
{
    public function index(): void
    {
        $dropBoxFile = new DropBoxFile();
        dd($dropBoxFile);
    }
}
