<?php

namespace App\Controllers;
use App\Models\RiwPendModel;
use App\Models\RiwJafaModel;
use App\Models\RiwProfesiModel;
class Home extends BaseController
{
    public function index()
    {     $id_dosen = session()->get('id_dosen');
        $riwPendModel = new RiwPendModel();
        $riwJafaModel = new RiwJafaModel();
        $riwProfesiModel = new RiwProfesiModel();
        $query = $riwPendModel->query("SELECT tingkat, jurusan FROM riwpendidikan_dosen WHERE id_dosen = $id_dosen ORDER BY tahun DESC")->getFirstRow();
        $jafa = $riwJafaModel->query("SELECT jafa_dosen FROM riwjafa_dosen WHERE id_dosen = $id_dosen ORDER BY tahun DESC")->getFirstRow();
        $profesi = $riwProfesiModel->query("SELECT id FROM riwprofesi_dosen WHERE id_dosen = $id_dosen")->getResult();

        $data = [
            'title' => 'Dashboard',
            'mainMenu' => 'Dashboard',
            'parentMenu' => 'Dashboard',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'id_dosen' => session()->get('id_dosen'),
            'query' => $query,
            'jafa' => $jafa,
            'profesi' => $profesi
        
        ];
        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dashboard/dashboard',$data);
        echo view('section/foot',$data);
        
    }
    private function lasteducation($id_dosen){
        
        $riwPendModel = new RiwPendModel();
        $query = $riwPendModel->query("SELECT tingkat FROM riwpendidikan_dosen WHERE id_dosen = $id_dosen ORDER BY tahun ASC")->getResult();
    }
    
}
