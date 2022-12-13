<?php

namespace App\Controllers;

class Sitasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sitasi Dosen',
            'mainMenu' => 'GS',
            'parentMenu' => 'reportSitasi'
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('sitasi/sitasi',$data);
        echo view('section/foot',$data);
    }
}
