<?php

namespace App\Controllers;

class Pengabdian extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi Pengabdian',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'rekognisiPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/rekognisi',$data);
        echo view('section/foot',$data);
    }

    public function rekognisiPengabdianDosen()
    {
        $data = [
            'title' => 'Daftar Rekognisi Pengabdian',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'rekognisiPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/listRekognisiPengabdian',$data);
        echo view('section/foot',$data);
    }

    public function reportpengabdian()
    {
        $data = [
            'title' => 'Laporan Pengabdian',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/reportpengabdian',$data);
        echo view('section/foot',$data);
    }

    public function listPengabdianDosen()
    {
        $data = [
            'title' => 'Daftar Pengabdian Dosen',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/listPengabdianDosen',$data);
        echo view('section/foot',$data);
    }

    public function reportJurnal()
    {
        $data = [
            'title' => 'Jurnal Pengabdian',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportJurnalPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/reportJurnal',$data);
        echo view('section/foot',$data);
    }

    public function listJurnalPengabdian()
    {
        $data = [
            'title' => 'Daftar Jurnal Dosen',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportJurnalPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/listJurnalPengabdian',$data);
        echo view('section/foot',$data);
    }
}
