<?php

namespace App\Controllers;
use App\Models\RiwPendModel;
use App\Models\RiwJafaModel;
use App\Models\RiwProfesiModel;
use App\Models\LuaranModel;
use App\Models\DosenModel;
use App\Models\RekognisiModel;
use App\Models\LaporanModel;
use App\Models\GsModel;
class Admin extends BaseController
{
    public function index()
    {     

       $dosen = new DosenModel();
       $dosen = $dosen->query("SELECT id_dosen, role_dosen, nama_dosen, email_dosen, nidn_dosen FROM dosen_febups where id_dosen = 2 ")->getResult();
        $data = [
            'title' => 'Beranda Admin',
            'mainMenu' => 'Beranda',
            'parentMenu' => 'Dashboard',
            'dosen' => $dosen

        ];

        // echo view('admin/section/home',$data);
        echo view('admin/section/head',$data);
        echo view('admin/section/sidebar',$data);
        echo view('admin/section/foot',$data);
     
        
    }
   
    public function profil($id)
    {     
        
        $dosenModel = new DosenModel();
        $pdd = new RiwPendModel();
        $jafar = new RiwJafaModel();
        $profesi = new RiwProfesiModel();
        $luaran = new LuaranModel();
        $rekognisi = new RekognisiModel();
        $laporan = new LaporanModel();
        $gs = new GsModel();
                $dosenModel = $dosenModel->query("SELECT nama_dosen, email_dosen, nidn_dosen,id_dosen, role_dosen FROM dosen_febups where id_dosen = $id ")->getResult();

        $lastpendidikan = $pdd->query("SELECT universitas, jurusan, tingkat, tahun FROM riwpendidikan_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();

        $jafa = $jafar->query("SELECT * FROM riwjafa_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();
        
        $profesi= $profesi->query("SELECT * FROM riwprofesi_dosen where id_dosen = $id ORDER BY berlaku DESC")->getResult();
        
        $luaran= $luaran->query("SELECT * FROM luaran_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();
        
        $rekognisi= $rekognisi->query("SELECT * FROM rekognisi_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();
       
        $laporan= $laporan->query("SELECT * FROM laporan_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();

        $gs= $gs->query("SELECT * FROM gs_dosen where id_dosen = $id")->getResult();



        $data = [
            'title' => 'Profil Dosen',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatDosen',
            'dosen' => $dosenModel,
            'pendidikan' => $lastpendidikan,
            'jafa' => $jafa,
            'profesi' => $profesi,
            'luaran' => $luaran,
            'rekognisi' => $rekognisi,
            'laporan' => $laporan,
            'gs' => $gs
          

        ];

         echo view('admin/section/head',$data);
        echo view('admin/section/sidebar',$data);
        echo view('admin/dosen/profilDosen',$data);
        echo view('admin/section/foot',$data);
     
        
    }

    public function listDosen()
    {     
        
        $dosenModel = new DosenModel();
      
                $dosenModel = $dosenModel->query("SELECT nama_dosen, email_dosen, nidn_dosen,id_dosen, role_dosen FROM dosen_febups where role_dosen = 2 ")->getResult();

        $data = [
            'title' => 'Profil Dosen',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatDosen',
            'dosen' => $dosenModel,
            'validasi' => \Config\Services::validation()
          

        ];

         echo view('admin/section/head',$data);
        echo view('admin/section/sidebar',$data);
        echo view('admin/dosen/daftarDosen',$data);
        echo view('admin/section/foot',$data);
     
        
    }
}
