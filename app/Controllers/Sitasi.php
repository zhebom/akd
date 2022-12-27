<?php

namespace App\Controllers;

use App\Models\GsModel;

class Sitasi extends BaseController
{
    public function index()
    {   
        $id_dosen = session()->get('id_dosen');
        $gsModel = new GsModel();
        $query = $gsModel->query("SELECT * FROM gs_dosen WHERE id_dosen = $id_dosen")->getResult();
        $data = [
            'title' => 'Sitasi Dosen',
            'mainMenu' => 'GS',
            'parentMenu' => 'reportSitasi',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'gs' => $query
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('sitasi/sitasi',$data);
        echo view('section/foot',$data);
    }
    public function addGS($gs){
        $today = date("Y-m-d H:i:s");
        $gsModel = new GsModel();
        
        $gsid = session()->get('id_dosen');
        $gsModel1 = $gsModel->query("SELECT * From gs_dosen WHERE id_dosen = $gsid ")->getResult();
      
        if ($gsModel1)
        { 
          
         $gsModel->query("UPDATE gs_dosen SET gs_dosen = '$gs' WHere id_dosen = $gsid ");
          
            
         } else {
            $data = [
                'id_dosen' => $gsid,
               'gs_dosen' => $gs,
               'created_at' => $today
       ]; 
            $gsModel->save($data);
        }
        // $validasi =  \Config\Services::validation();
        // session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">ID Google Schoolar Berhasil Di Update</div>');
        // return redirect()->to(base_url('/dosen/riwayatJafaDosen'));
    }
}
