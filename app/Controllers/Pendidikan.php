<?php

namespace App\Controllers;
use App\Models\RekognisiModel;
class Pendidikan extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi',
            'mainMenu' => 'Pendidikan',
            'parentMenu' => 'rekognisiPendidikan',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => \Config\Services::validation()
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
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'rekognisi' => $rekognisi,
            'validasi'=>$validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pendidikan/listRekognisiPendidikan',$data);
        echo view('section/foot',$data);
    }
}
