<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        
      
        $data = [
            'title' => 'Dashboard',
            'mainMenu' => 'Dashboard',
            'parentMenu' => 'Dashboard',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'role_dosen' => session()->get('role_dosen')
        
        ];
        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dashboard/dashboard',$data);
        echo view('section/foot',$data);
        
    }

    
}
