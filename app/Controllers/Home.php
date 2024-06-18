<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    //         Funcion controladora en routes
    public function Holamundo(): string
    {
        return view('welcome_message');
    }

}
