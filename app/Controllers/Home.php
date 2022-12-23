<?php

namespace App\Controllers;
use App\Models\RiwPendModel;
use App\Models\RiwJafaModel;
use App\Models\RiwProfesiModel;
use App\Models\LuaranModel;
class Home extends BaseController
{
    public function index()
    {     $id_dosen = session()->get('id_dosen');
        $riwPendModel = new RiwPendModel();
        $riwJafaModel = new RiwJafaModel();
        $riwProfesiModel = new RiwProfesiModel();
        $LuaranModel = new LuaranModel();
        $query = $riwPendModel->query("SELECT tingkat, jurusan FROM riwpendidikan_dosen WHERE id_dosen = $id_dosen ORDER BY tahun DESC")->getFirstRow();
        $jafa = $riwJafaModel->query("SELECT jafa_dosen FROM riwjafa_dosen WHERE id_dosen = $id_dosen ORDER BY tahun DESC")->getFirstRow();
        $profesi = $riwProfesiModel->query("SELECT id FROM riwprofesi_dosen WHERE id_dosen = $id_dosen")->getResult();
        $label = $LuaranModel->query("SELECT kd_tridharma FROM luaran_dosen WHERE id_dosen = $id_dosen GROUP BY kd_tridharma ASC")->getResult();
     
        $data = $LuaranModel->query("SELECT COUNT(kd_tridharma) FROM luaran_dosen WHERE id_dosen = $id_dosen group by kd_tridharma ")->getResult();
    //    $labeljson = json_encode($label);
       $labeljson =$label;
        $datas = $data;
       
        
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
            'profesi' => $profesi,
            'label' =>$labeljson,
            'data' => $datas

        
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
    
    public function json_label(){
        $id_dosen = session()->get('id_dosen');
        $LuaranModel = new LuaranModel();
        $label = $LuaranModel->query("SELECT * FROM luaran_dosen WHERE id_dosen = $id_dosen GROUP BY kd_tridharma")->getResult();
         $a = json_encode($label);
        
         echo $a; 
    }
    public function json_count(){
        $id_dosen = session()->get('id_dosen');
        $LuaranModel = new LuaranModel();
        $label = $LuaranModel->query("SELECT kd_tridharma FROM luaran_dosen WHERE id_dosen = $id_dosen GROUP BY kd_tridharma")->getResult();
         $a = count($label);
        
         echo $a; 
    }
}
