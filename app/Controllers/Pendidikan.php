<?php

namespace App\Controllers;

class Pendidikan extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi Pendidikan',
            'mainMenu' => 'Pendidikan',
            'parentMenu' => 'rekognisiPendidikan',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen')
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pendidikan/rekognisi',$data);
        echo view('section/foot',$data);
    }

    public function listRekognisiPendidikan()
    {
        $data = [
            'title' => 'Daftar Rekognisi Pendidikan',
            'mainMenu' => 'Pendidikan',
            'parentMenu' => 'rekognisiPendidikan',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen')
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pendidikan/listRekognisiPendidikan',$data);
        echo view('section/foot',$data);
    }
}
