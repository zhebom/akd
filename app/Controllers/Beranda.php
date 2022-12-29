<?php

namespace App\Controllers;
use App\Models\RiwPendModel;
use App\Models\RiwJafaModel;
use App\Models\RiwProfesiModel;
use App\Models\LuaranModel;
use App\Models\DosenModel;
use App\Models\RekognisiModel;
use App\Models\LaporanModel;
class Beranda extends BaseController
{
    public function index()
    {     
        $dosenModel = new DosenModel();
        $dosenModel = $dosenModel->query("SELECT nama_dosen, email_dosen, nidn_dosen,id_dosen FROM dosen_febups")->getResult();

        $data = [
            'title' => 'Beranda',
            'dosen' => $dosenModel

        ];

        echo view('beranda/home',$data);
     
        
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
                $dosenModel = $dosenModel->query("SELECT nama_dosen, email_dosen,foto, nidn_dosen,id_dosen FROM dosen_febups where id_dosen = $id")->getResult();

        $lastpendidikan = $pdd->query("SELECT universitas, jurusan, tingkat, tahun FROM riwpendidikan_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();

        $jafa = $jafar->query("SELECT * FROM riwjafa_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();
        
        $profesi= $profesi->query("SELECT * FROM riwprofesi_dosen where id_dosen = $id ORDER BY berlaku DESC")->getResult();
        
        $luaran= $luaran->query("SELECT * FROM luaran_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();
        
        $rekognisi= $rekognisi->query("SELECT * FROM rekognisi_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();
       
        $laporan= $laporan->query("SELECT * FROM laporan_dosen where id_dosen = $id ORDER BY tahun DESC")->getResult();



        $data = [
            'title' => 'Profil Dosen',
            'dosen' => $dosenModel,
            'pendidikan' => $lastpendidikan,
            'jafa' => $jafa,
            'profesi' => $profesi,
            'luaran' => $luaran,
            'rekognisi' => $rekognisi,
            'laporan' => $laporan
          

        ];

        echo view('dosen/profile',$data);
     
        
    }
}
