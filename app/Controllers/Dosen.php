<?php

namespace App\Controllers;
use App\Models\RiwPendModel;
use App\Models\RiwJafaModel;
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
        $data = [
            'title' => 'Jabatan Fungsional',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatJafaDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
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
            'nidn_dosen' => session()->get('nidn_dosen')
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('dosen/profesi',$data);
        echo view('section/foot',$data);
    }

    public function listProfesi()
    {
        $data = [
            'title' => 'Daftar Sertifikasi Profesi',
            'mainMenu' => 'Dosen',
            'parentMenu' => 'riwayatProfesiDosen',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen')
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
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Pendidikan Berhasil Dihapus</div>');
       return redirect()->to(base_url('/dosen/listPendidikanDosen'));
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
}
