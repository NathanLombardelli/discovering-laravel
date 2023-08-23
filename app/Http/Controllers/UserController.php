<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class UserController extends Controller
{
    public function show(string $name): View
    {
        return view('home', [
            'titre2' => $name
        ]);
    }
}
