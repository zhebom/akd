<?php

namespace App\Controllers;

class Penelitian extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'rekognisiPenelitian'
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/rekognisi',$data);
        echo view('section/foot',$data);
    }

    public function reportPenelitian()
    {
        $data = [
            'title' => 'Laporan Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportPenelitian'
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportPenelitian',$data);
        echo view('section/foot',$data);
    }

    public function reportJurnal()
    {
        $data = [
            'title' => 'Jurnal Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportJurnalPenelitian'
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportJurnal',$data);
        echo view('section/foot',$data);
    }
}
