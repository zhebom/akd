<?php

namespace App\Controllers;

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
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Tambah Laporan',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => $validasi
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportPenelitian',$data);
        echo view('section/foot',$data);
    }

    public function listPenelitianDosen()
    {
        $pdd = 'penelitian';
        $id_dosen = session()->get('id_dosen');
        $LaporanModel = new LaporanModel();
        $laporan = $LaporanModel->query("SELECT * FROM laporan_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun DESC ")->getResult();
        
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Daftar Penelitian Dosen',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'laporan' => $laporan,
            'validasi' => $validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/listPenelitianDosen',$data);
        echo view('section/foot',$data);
    }

    public function reportJurnal()
    {
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Tambah Luaran',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportJurnalPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => $validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportJurnal',$data);
        echo view('section/foot',$data);
    }

    public function listJurnalDosen()
    {
        $pdd = 'penelitian';
        $id_dosen = session()->get('id_dosen');
        $validasi =  \Config\Services::validation();
        $LuaranModel = new LuaranModel();
        $LuaranModel = $LuaranModel->query("SELECT * FROM luaran_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun DESC ")->getResult();
        $data = [
            'title' => 'Daftar Luaran Dosen',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportJurnalPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'luaran' => $LuaranModel,
            'validasi' => $validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/listJurnalDosen',$data);
        echo view('section/foot',$data);
    }
}
