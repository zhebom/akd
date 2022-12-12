<?php

namespace App\Controllers;

class Dosen extends BaseController
{
    public function pendidikan()
    {
        $data = [
            'title' => 'Riwayat Pendidikan Dosen',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatPendidikanDosen'
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/pendidikan',$data);
        echo view('section/foot',$data);
    }

    public function jafa()
    {
        $data = [
            'title' => 'Riwayat Jabatan Fungsional Dosen',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatJafaDosen'
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/jafa',$data);
        echo view('section/foot',$data);
    }

    public function profesi()
    {
        $data = [
            'title' => 'Riwayat Pendidikan Profesi',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatProfesiDosen'
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/profesi',$data);
        echo view('section/foot',$data);
    }

    public function bnsp()
    {
        $data = [
            'title' => 'Riwayat Sertifikasi Bnsp',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatBnspDosen'
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/bnsp',$data);
        echo view('section/foot',$data);
    }
}
