<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('section/head');
        echo view('section/sidebar');
        echo view('section/foot');
    }
}
