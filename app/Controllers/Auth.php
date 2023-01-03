<?php

namespace App\Controllers;
use App\Models\DosenModel;
class Auth extends BaseController
{
    public function login()
    {
              
        session();
        $data = [
            'title' => 'Login',
            'validasi' => \Config\Services::validation()
        ];
       return view('auth/login',$data);
        
    }
    public function ceklogin()
    {
        $email = $this->request->getVar('email');
        $pass =  $this->request->getVar('pass');
        $dosenModel = new DosenModel();
        $ceklogin =  $dosenModel->where('email_dosen', $email)->first();
        
        $session = session();

        if ($ceklogin) {
            
            if (password_verify($pass, $ceklogin['pass_dosen'])) {
                $data = [
                    'id_dosen' => $ceklogin['id_dosen'],
                    'nama_dosen' => $ceklogin['nama_dosen'],
                    'email_dosen' => $ceklogin['email_dosen'],
                    'role_dosen' => $ceklogin['role_dosen'],
                    'nidn_dosen' => $ceklogin['nidn_dosen'],
                    'logged_id' => TRUE
                ];
              
                $session->set($data);
                
                if ($ceklogin['role_dosen']>1)
                {
                  
                    return redirect()->to(base_url('dashboard'));
                } 
                else 
                {
                    //echo "Anda Admin"; 
                   return redirect()->to(base_url('admin/dashboard'));
                }
                //echo "password anda berhasil";
            
            } 
            else 
            {
                $validasi =  \Config\Services::validation();
                session()->setFlashdata('msg', 'Email atau Password yang anda masukkan salah');
                return redirect()->to(base_url('/login'));
            }
        } else {
            $validasi =  \Config\Services::validation();
            session()->setFlashdata('msg', 'Email atau Password yang anda masukkan salah');
            return redirect()->to(base_url('/login'));
        }
      
      
        
    }
    
    public function register()
    {
        session();
       
        $data = [
            'title' => 'Login',
            'validasi' => \Config\Services::validation(),
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatDosen',
        ];
       
        echo view('admin/section/head',$data);
        echo view('admin/section/sidebar',$data);
        echo view('auth/register',$data);
        echo view('admin/section/foot',$data);
    
    }

    public function addDosen()
    {

      if (!$this->validate(
        [           
            'name' => 'required',
            
            'email' => 'required|valid_email|is_unique[dosen_febups.email_dosen]',
            'pass' => 'required',
            'passconf' => 'matches[pass]',
        ],
        [            
            'name' => [
                'required' => 'Nama harus diisi',
            ],
            'email' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Masukkan email yang benar',
                'is_unique' => 'Email yang anda masukkan sudah terdaftar silahkan untuk melakukan reset password di Administrator - Mas Widhi',                
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
         return redirect()->to(base_url('/admin/dosen/register'))->withinput()->with('validation',$validasi);
    
        }
    
        $today = date("Y-m-d H:i:s");
        $dosenModel = new DosenModel();
        $dosenModel->save([
          
            'nama_dosen' => $this->request->getVar('name'),
            'email_dosen' => $this->request->getVar('email'),
            'nidn_dosen' => $this->request->getVar('nidn'),
            'role_dosen' => "2",
            'pass_dosen' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            'created_at' => $today
 
        ]);
        
        $validasi =  \Config\Services::validation();
        session()->setFlashdata('msg', 'Dosen Berhasil Ditambah');
        return redirect()->to(base_url('/admin/dosen/register'));
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
