<?php

namespace App\Controllers;
use App\Models\RekognisiModel;
use App\Models\LaporanModel;
use App\Models\LuaranModel;
use App\Models\DataLuaranModel;
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
        $pdd = 'pengabdian';
        $id_dosen = session()->get('id_dosen');
        $RekognisiModel = new RekognisiModel();
        $rekognisi = $RekognisiModel->query("SELECT * FROM rekognisi_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun DESC ")->getResult();
        
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Daftar Rekognisi Pengabdian', 
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'rekognisiPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'rekognisi' => $rekognisi,
            'validasi'=>$validasi
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/listRekognisiPengabdian',$data);
        echo view('section/foot',$data);
    }

    public function reportpengabdian()
    {
       
        $validasi =  \Config\Services::validation();
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
        // echo view('penelitian/reportPenelitian',$data);
        echo view('penelitian/reportPenelitian',$data);
        echo view('section/foot',$data);
    }

    public function listPengabdianDosen()
    {
        $pdd = 'pengabdian';
        $id_dosen = session()->get('id_dosen');
        $LaporanModel = new LaporanModel();
        $laporan = $LaporanModel->query("SELECT * FROM laporan_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun DESC ")->getResult();
        
        
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Daftar Pengabdian Dosen',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => $validasi,
            'laporan' => $laporan
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/listPengabdianDosen',$data);
        echo view('section/foot',$data);
    }

    public function reportJurnal()
    {
        $validasi =  \Config\Services::validation();
		$dlModel = new DataLuaranModel();
		$dl = $dlModel->query("Select nama_luaran From kode_luaran order by nama_luaran ASC")->getResult();
        $data = [
            'title' => 'Jurnal Pengabdian',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportJurnalPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => $validasi,
			'dl' => $dl
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportJurnal',$data);
        echo view('section/foot',$data);
    }

    public function listJurnalPengabdian()
    {

        $pdd = 'pengabdian';
        $id_dosen = session()->get('id_dosen');
        $validasi =  \Config\Services::validation();
        $LuaranModel = new LuaranModel();
        $LuaranModel = $LuaranModel->query("SELECT * FROM luaran_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun DESC ")->getResult();
        $data = [
            'title' => 'Daftar Jurnal Dosen',
            'mainMenu' => 'Pengabdian',
            'parentMenu' => 'reportJurnalPengabdian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => $validasi,
            'luaran' => $LuaranModel
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pengabdian/listJurnalPengabdian',$data);
        echo view('section/foot',$data);
    }
}
