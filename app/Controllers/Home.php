<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function page($page='home'){
        echo view('template/header');
        echo view($page);
        echo view('template/footer');
    }
}
