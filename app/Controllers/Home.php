<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dashboard/dashboard',$data);
        echo view('section/foot',$data);
    }
}
