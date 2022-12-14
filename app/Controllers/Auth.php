<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {

      
        $data = [
            'title' => 'Login'
           
        ];
      
        return view('auth/login',$data);
        
    }

    public function register()
    {
        session();
       
        $data = [
            'title' => 'Login',
            'validasi' => \Config\Services::validation()
        ];
        return view('auth/register',$data);
    
    }

    public function addDosen()
    {

      
      if (!$this->validate(
        [
            
            'name' => 'required',
            'email' => 'required|valid_email',
            'pass' => 'required',
            'passconf' => 'matches[pass]',
        ],
        [
            
            'name' => [
                'required' => 'Nama harus diisi',
            ],
            'email' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Masukkan email yang benar'
            ],
            'pass' => [
                'required' => 'Password harus diisi',
            ],
            'passconf' => [
                'matches' => 'Password yang dimasukkan tidak sama',
            ]
            ]
    )) {
        $validasi =  \Config\Services::validation();
         return redirect()->to(base_url('/register'))->withinput()->with('validation',$validasi);
    }
       echo "sukses";
    }
}
