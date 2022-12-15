<?php

namespace App\Controllers;

class Sitasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sitasi Dosen',
            'mainMenu' => 'GS',
            'parentMenu' => 'reportSitasi',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('sitasi/sitasi',$data);
        echo view('section/foot',$data);
    }
}
