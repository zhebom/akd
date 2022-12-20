<?php

namespace App\Controllers;
use App\Models\RekognisiModel;
class Penelitian extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'rekognisiPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/rekognisi',$data);
        echo view('section/foot',$data);
    }

    public function listRekognisiPenelitian()
    {
        $pdd = 'penelitian';
        $id_dosen = session()->get('id_dosen');
        $RekognisiModel = new RekognisiModel();
        $rekognisi = $RekognisiModel->query("SELECT * FROM rekognisi_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun ASC ")->getResult();
        
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Daftar Rekognisi Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'rekognisiPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'rekognisi' => $rekognisi,
            'validasi'=>$validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/listRekognisiPenelitian',$data);
        echo view('section/foot',$data);
    }


    

    public function reportPenelitian()
    {
        $data = [
            'title' => 'Laporan Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportPenelitian',$data);
        echo view('section/foot',$data);
    }

    public function listPenelitianDosen()
    {
        $data = [
            'title' => 'Daftar Penelitian Dosen',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/listPenelitianDosen',$data);
        echo view('section/foot',$data);
    }

    public function reportJurnal()
    {
        $data = [
            'title' => 'Jurnal Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportJurnalPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportJurnal',$data);
        echo view('section/foot',$data);
    }

    public function listJurnalDosen()
    {
        $data = [
            'title' => 'Daftar Jurnal Dosen',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportJurnalPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/listJurnalDosen',$data);
        echo view('section/foot',$data);
    }

    
}
