<?php

namespace App\Controllers;
use App\Models\RiwPendModel;
use App\Models\RiwJafaModel;
use App\Models\RiwProfesiModel;
use App\Models\LuaranModel;
use App\Models\DosenModel;
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
        $dosenModel = $dosenModel->query("SELECT nama_dosen, email_dosen, nidn_dosen,id_dosen FROM dosen_febups")->getResult();
        $data = [
            'title' => 'Profil Dosen',
            'dosen' => $dosenModel
          

        ];

        echo view('dosen/profile',$data);
     
        
    }
}
