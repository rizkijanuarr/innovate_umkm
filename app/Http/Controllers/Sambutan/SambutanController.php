<?php

namespace App\Http\Controllers\Sambutan;

use App\Models\Greeting;
use App\Http\Controllers\Controller;

class SambutanController extends Controller
{
    public function index()
    {
        $greetings = Greeting::all();

        return view('sambutan', compact('greetings'));
    }
}
