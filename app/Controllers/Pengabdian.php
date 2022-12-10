<?php

namespace App\Controllers;

class Pengabdian extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi Pengabdian',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'rekognisiPengabdian'
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/rekognisi',$data);
        echo view('section/foot'),$data;
    }

    public function reportpengabdian()
    {
        $data = [
            'title' => 'Laporan Pengabdian',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportPengabdian'
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/reportpengabdian',$data);
        echo view('section/foot'),$data;
    }

    public function reportJurnal()
    {
        $data = [
            'title' => 'Jurnal Pengabdian',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportJurnalPengabdian'
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/reportJurnal',$data);
        echo view('section/foot'),$data;
    }
}
