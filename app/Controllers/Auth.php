<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
      
        echo view('auth/login',$data);
        
    }

    public function register()
    {
        $data = [
            'title' => 'Pendaftaran Dosen'
        ];
       // echo view('section/head',$data);
      //  echo view('section/sidebar',$data);
        echo view('auth/register',$data);
      //  echo view('section/foot',$data);
    }
}
