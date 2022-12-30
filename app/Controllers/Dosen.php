<?php

namespace App\Controllers;
use App\Models\RiwPendModel;
use App\Models\RiwJafaModel;
use App\Models\RiwProfesiModel;
use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function pendidikan()
    {
        $data = [
            'title' => 'Riwayat Pendidikan Dosen',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatPendidikanDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => \Config\Services::validation()
            
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/pendidikan',$data);
        echo view('section/foot',$data);
    }
    public function listPendidikan()
    {
        

        $id_dosen = session()->get('id_dosen');
        $riwPendModel = new RiwPendModel();
        $query = $riwPendModel->query("SELECT * FROM riwpendidikan_dosen WHERE id_dosen = $id_dosen ORDER BY tahun ASC")->getResult();

        
        $data = [
            'title' => 'Pendidikan',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatPendidikanDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'id_dosen' => session()->get('id_dosen'),
            'query' => $query
            
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/listPendidikan',$data);
        echo view('section/foot',$data);
    }

    public function jafa()
    {
        $id_dosen = session()->get('id_dosen');
        
        $data = [
            'title' => 'Riwayat Jabatan Fungsional Dosen',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatJafaDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'id_dosen' => session()->get('id_dosen'),
            
            'validasi' => \Config\Services::validation()
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/jafa',$data);
        echo view('section/foot',$data);
    }

    public function listJafa()
    {
        $id_dosen = session()->get('id_dosen');
        $riwJafaModel = new RiwJafaModel();
        $query = $riwJafaModel->query("SELECT * FROM riwjafa_dosen WHERE id_dosen = $id_dosen ORDER BY tahun ASC")->getResult();
        
        $data = [
            'title' => 'Jabatan Fungsional',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatJafaDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'jafa' => $query
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/listJafa',$data);
        echo view('section/foot',$data);
    }


    public function profesi()
    {
        $data = [
            'title' => 'Riwayat Pendidikan Profesi',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatProfesiDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => \Config\Services::validation()
            
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/profesi',$data);
        echo view('section/foot',$data);
    }

    public function listProfesi()
    {
        $id_dosen = session()->get('id_dosen');
        $riwProfesiModel = new RiwProfesiModel();
        $profesi = $riwProfesiModel->query("SELECT * FROM riwprofesi_dosen WHERE id_dosen = $id_dosen ORDER BY berlaku ASC")->getResult();
        
        $data = [
            'title' => 'Daftar Sertifikasi Profesi',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatProfesiDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'profesi' => $profesi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/listProfesi',$data);
        echo view('section/foot',$data);
    }

    public function bnsp()
    {
        $data = [
            'title' => 'Riwayat Sertifikasi Bnsp',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatBnspDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/bnsp',$data);
        echo view('section/foot',$data);
    }

    public function listBnsp()
    {
        $data = [
            'title' => 'Daftar Sertifikasi Bnsp',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatBnspDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/listbnsp',$data);
        echo view('section/foot',$data);
    }

    public function addPendidikanDosen()
    {
       
      if (!$this->validate(
        [           
            'tempat' => 'required',
            
            'tahun' => 'required',
           
            'jurusan' => 'required'
            ,
            'tingkat' => 'required'
            ,

            'pdfku' => 'uploaded[pdfku]|ext_in[pdfku,pdf]'
                             ],
        [            
            'tempat' => [
                'required' => 'Tempat harus diisi'
            ],


            'tahun' => [ 
                'required' => 'Tahun harus diisi'

            ],
            'tingkat' => [ 
                'required' => 'Pendidikan harus dipilih'

            ],
            'pdfku' => [
                'uploaded' => 'lho kok belum upload',
                'ext_in' => 'PDF lho bukan yang lain'
            ]

           
            ,
            'jurusan' => [
                'required' => 'Jurusan harus diisi'

            
            ]]
    )) {
        
        session()->setFlashdata('msg', '<div class="alert alert-warning" role="alert">Data Gagal Disimpan</div>');
        return redirect()->to(base_url('dosen/riwayatPendidikanDosen'))->withinput();
    
        }
    
        $today = date("Y-m-d H:i:s");
        $riwPendModel = new RiwPendModel();
        $filePend = $this->request->getFile('pdfku');
       
        $filePend->move('profilDosen');
        $namaFile = $filePend->getName();
        $riwPendModel->save([
          
            'id_dosen' => session()->get('id_dosen'),
            'universitas' => $this->request->getVar('tempat'),
            'jurusan' => $this->request->getVar('jurusan'),
            'tahun' => $this->request->getVar('tahun'),
            'tingkat' => $this->request->getVar('tingkat'),
            'file' => $namaFile,
            'created_at' => $today
 
        ]);
        
        $validasi =  \Config\Services::validation();
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Pendidikan Berhasil Ditambah</div>');
        return redirect()->to(base_url('/dosen/riwayatPendidikanDosen'));
    }

    public function delPendidikanDosen($id)
    {
        $riwPendModel = new RiwPendModel();
        $riwPendModel->delete($id);
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Rekognisi Berhasil Dihapus</div>');
       return redirect()->to(base_url('/pendidikan/listPendidikanDosen'));
    }
   

    public function addJafaDosen()
    {
       
      if (!$this->validate(
        [           
                        
            'tahun' => 'required',
            'jafa' => 'required',
           
            'pdfku' => 'uploaded[pdfku]|ext_in[pdfku,pdf]'
                             ],
        [            
           
            'tahun' => [ 
                'required' => 'Tahun harus diisi'

            ],
            'jafa' => [ 
                'required' => 'Jabatan harus dipilih'

            ],
            'pdfku' => [
                'uploaded' => 'lho kok belum upload',
                'ext_in' => 'PDF lho bukan yang lain'
            ]

           
            ]
    )) {
        
        session()->setFlashdata('msg', '<div class="alert alert-warning" role="alert">Data Gagal Disimpan</div>');
        return redirect()->to(base_url('dosen/riwayatJafaDosen'))->withinput();
    
        }
    
        $today = date("Y-m-d H:i:s");
        $riwJafaModel = new RiwJafaModel();
        $filePend = $this->request->getFile('pdfku');
       
        $filePend->move('profilDosen');
        $namaFile = $filePend->getName();
        $riwJafaModel->save([
          
            'id_dosen' => session()->get('id_dosen'),
            'jafa_dosen' => $this->request->getVar('jafa'),
            'tahun' => $this->request->getVar('tahun'),
            'file' => $namaFile,
            'created_at' => $today
 
        ]);
        
        $validasi =  \Config\Services::validation();
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Jabatan Fungsional Berhasil Ditambah</div>');
        return redirect()->to(base_url('/dosen/riwayatJafaDosen'));
    }

    public function delJafaDosen($id)
    {
        $riwJafaModel = new RiwJafaModel();
        $riwJafaModel->delete($id);
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Jabatan Fungsional Berhasil Dihapus</div>');
       return redirect()->to(base_url('/dosen/listJafaDosen'));
    }

    public function addProfesiDosen()
    {
       
      if (!$this->validate(
        [           
            'penyelenggara' => 'required',            
            'kompetensi' => 'required',
            'date' => 'required',
            'skala' => 'required',
           
            'pdfku' => 'uploaded[pdfku]|ext_in[pdfku,pdf]'
                             ],
        [            
           
            'penyelenggara' => [ 
                'required' => 'Penyelenggara harus diisi'
            ],
            'kompetensi' => [ 
                'required' => 'kompetensi harus diisi'
            ],
            'date' => [ 
                'required' => 'Berlaku hingga harus diisi'
            ],
            'skala' => [ 
                'required' => 'Skala harus diisi'
            ],
            'pdfku' => [
                'uploaded' => 'lho kok belum upload',
                'ext_in' => 'PDF lho bukan yang lain'
            ]

           
            ]
    )) {
        
        session()->setFlashdata('msg', '<div class="alert alert-warning" role="alert">Data Gagal Disimpan</div>');
        return redirect()->to(base_url('dosen/riwayatProfesiDosen'))->withinput();
    
        }
    
        $today = date("Y-m-d H:i:s");
        $riwProfesiModel = new RiwProfesiModel();
        $filePend = $this->request->getFile('pdfku');
       
        $filePend->move('profilDosen');
        $namaFile = $filePend->getName();
        $riwProfesiModel->save([
          
            'id_dosen' => session()->get('id_dosen'),
            'penyelenggara' => $this->request->getVar('penyelenggara'),
            'kompetensi' => $this->request->getVar('kompetensi'),
            'berlaku' => $this->request->getVar('date'),
            'skala' => $this->request->getVar('skala'),
            'file' => $namaFile,
            'created_at' => $today
 
        ]);
        
        $validasi =  \Config\Services::validation();
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Profesi Berhasil Ditambah</div>');
        return redirect()->to(base_url('/dosen/riwayatProfesiDosen'));
    }
    public function delProfesiDosen($id)
    {
        $riwProfesiModel = new RiwProfesiModel();
        $riwProfesiModel->delete($id);
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Profesi Berhasil Dihapus</div>');
       return redirect()->to(base_url('/dosen/listProfesiDosen'));
    }

    public function ProfilDosen()
    {
        $id_dosen = session()->get('id_dosen');
        $dosen = new DosenModel();
        $dosen = $dosen->query("SELECT * FROM dosen_febups where id_dosen = $id_dosen")->getResult();
        
        $data = [
            'title' => 'Profil Dosen',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatPendidikanDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'dosen' => $dosen,
            'validasi' => \Config\Services::validation()
            
            
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/profilDosen',$data);
        echo view('section/foot',$data);
    }

    public function editDosen()
    {
        $id_dosen = session()->get('id_dosen');
        $pass = $this->request->getVar('pass');
        if ($pass){
            // Jika Password terisi

            if (!$this->validate(
                [           
                    
                   
                    'passconf' => 'matches[pass]',
                ],
                [            
                   
                   
                    'passconf' => [
                        'matches' => 'Password yang dimasukkan tidak sama',
                    ]
                    ]
            )) {
                
                
                $validasi =  \Config\Services::validation();
                session()->setFlashdata('msg', 'Dosen gagal Dirubah');
                return redirect()->to(base_url('/dosen'))->withinput();
            
                }
                $today = date("Y-m-d H:i:s");
                $dosenModel = new DosenModel();
                $nama_dosen =  $this->request->getVar('name');
                $email_dosen = $this->request->getVar('email');
                $nidn_dosen = $this->request->getVar('nidn');
                $pass_dosen = password_hash($pass, PASSWORD_DEFAULT);
    
                $dosenModel->query("UPDATE dosen_febups SET nama_dosen =  '$nama_dosen', email_dosen = '$email_dosen', nidn_dosen = '$nidn_dosen', created_at = '$today' , pass_dosen = '$pass_dosen' WHERE id_dosen = $id_dosen");
                
                $validasi =  \Config\Services::validation();
                session()->setFlashdata('msg', 'Dosen Berhasil Dirubah');
                return redirect()->to(base_url('/dosen'));
            
            
        } else {
            // Jika Password tidak terisi 

            $today = date("Y-m-d H:i:s");
            $dosenModel = new DosenModel();
            $nama_dosen =  $this->request->getVar('name');
            $email_dosen = $this->request->getVar('email');
            $nidn_dosen = $this->request->getVar('nidn');

            $dosenModel->query("UPDATE dosen_febups SET nama_dosen =  '$nama_dosen', email_dosen = '$email_dosen', nidn_dosen = '$nidn_dosen', created_at = '$today' WHERE id_dosen = $id_dosen");
         
            
            $validasi =  \Config\Services::validation();
            session()->setFlashdata('msg', 'Dosen Berhasil Diruibah');
            return redirect()->to(base_url('/dosen'));
        }
    
     
    }
    
}
