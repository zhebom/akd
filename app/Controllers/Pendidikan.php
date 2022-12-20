<?php

namespace App\Controllers;
use App\Models\RekognisiModel;
class Pendidikan extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi',
            'mainMenu' => 'Pendidikan',
            'parentMenu' => 'rekognisiPendidikan',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => \Config\Services::validation()
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pendidikan/rekognisi',$data);
        echo view('section/foot',$data);
    }

    public function listRekognisiPendidikan()
    {
        $id_dosen = session()->get('id_dosen');
        $RekognisiModel = new RekognisiModel();
        $rekognisi = $RekognisiModel->query("SELECT * FROM rekognisi_dosen WHERE id_dosen = $id_dosen ORDER BY tahun ASC ")->getResult();
        
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Daftar Rekognisi Pendidikan',
            'mainMenu' => 'Pendidikan',
            'parentMenu' => 'rekognisiPendidikan',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'rekognisi' => $rekognisi,
            'validasi'=>$validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pendidikan/listRekognisiPendidikan',$data);
        echo view('section/foot',$data);
    }

    public function addRekognisiDosen()
    {
       
      if (!$this->validate(
        [      
            'tridharma' => 'required',     
            'rekognisi' => 'required',            
            'oleh' => 'required',
            'tahun' => 'required',
            'skala' => 'required',
           
            'pdfku' => 'uploaded[pdfku]|ext_in[pdfku,pdf]'
                             ],
        [            
            'tridharma' => [ 
                'required' => 'Tridharma harus diisi'
            ],
            'rekognisi' => [ 
                'required' => 'Rekognisi harus diisi'
            ],
            'oleh' => [ 
                'required' => 'Kolom diundang oleh harus diisi'
            ],
            'tahun' => [ 
                'required' => 'Tahun harus diisi'
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
        return redirect()->to(base_url('pendidikan/rekognisi'))->withinput();
    
        }
    
        $today = date("Y-m-d H:i:s");
        $RekognisiModel = new RekognisiModel();
        $filePend = $this->request->getFile('pdfku');
       
        $filePend->move('rekognisiDosen');
        $namaFile = $filePend->getName();
        $RekognisiModel->save([
          
            
            'id_dosen' => session()->get('id_dosen'),
            'kd_tridharma' => $this->request->getVar('tridharma'),
            'rekognisi' => $this->request->getVar('rekognisi'),
            'oleh' => $this->request->getVar('oleh'),
            'skala' => $this->request->getVar('skala'),
            'tahun' => $this->request->getVar('tahun'),
            'file' => $namaFile,
            'created_at' => $today
 
        ]);
        
        $validasi =  \Config\Services::validation();
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Profesi Berhasil Ditambah</div>');
        return redirect()->to(base_url('/pendidikan/rekognisi'));
    }
    public function delRekognisiDosen($id)
    {
        $riwRekognisiModel = new RekognisiModel();
        $riwRekognisiModel->delete($id);
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Pendidikan Berhasil Dihapus</div>');
       return redirect()->to(base_url('/pendidikan/rekognisiPendidikanDosen'));
    }
}
