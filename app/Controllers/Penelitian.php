<?php

namespace App\Controllers;
use App\Models\RekognisiModel;
use App\Models\LaporanModel;
use App\Models\LuaranModel;
use App\Models\DataLuaranModel;
class Penelitian extends BaseController
{
    public function rekognisi()
    {
        $data = [
            'title' => 'Rekognisi Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'rekognisiPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' =>  $validasi =  \Config\Services::validation()

        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('pendidikan/rekognisi',$data);
        echo view('section/foot',$data);
    }

    public function listRekognisiPenelitian()
    {
        $pdd = 'penelitian';
        $id_dosen = session()->get('id_dosen');
        $RekognisiModel = new RekognisiModel();
        $rekognisi = $RekognisiModel->query("SELECT * FROM rekognisi_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun DESC ")->getResult();
        
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Daftar Rekognisi Penelitian',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'rekognisiPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'rekognisi' => $rekognisi,
            'validasi'=>$validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/listRekognisiPenelitian',$data);
        echo view('section/foot',$data);
    }


    

    public function reportPenelitian()
    {
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Tambah Laporan',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => $validasi
        ];

        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportPenelitian',$data);
        echo view('section/foot',$data);
    }

    public function listPenelitianDosen()
    {
        $pdd = 'penelitian';
        $id_dosen = session()->get('id_dosen');
        $LaporanModel = new LaporanModel();
        $laporan = $LaporanModel->query("SELECT * FROM laporan_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun DESC ")->getResult();
        
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Daftar Penelitian Dosen',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'laporan' => $laporan,
            'validasi' => $validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/listPenelitianDosen',$data);
        echo view('section/foot',$data);
    }

    public function reportJurnal()
    {
		$dlModel = new DataLuaranModel();
		$dl = $dlModel->query("Select nama_luaran From kode_luaran order by nama_luaran ASC")->getResult();
        $validasi =  \Config\Services::validation();
        $data = [
            'title' => 'Tambah Luaran',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportJurnalPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'validasi' => $validasi,
			'dl' => $dl
        ];


		
        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/reportJurnal',$data);
        echo view('section/foot',$data);
    }

    public function listJurnalDosen()
    {
        $pdd = 'penelitian';
        $id_dosen = session()->get('id_dosen');
        $validasi =  \Config\Services::validation();
        $LuaranModel = new LuaranModel();
        $LuaranModel = $LuaranModel->query("SELECT * FROM luaran_dosen WHERE id_dosen = $id_dosen AND kd_tridharma = '$pdd' ORDER BY tahun DESC ")->getResult();
        $data = [
            'title' => 'Daftar Luaran Dosen',
            'mainMenu' => 'Penelitian',
            'parentMenu' => 'reportJurnalPenelitian',
            'nama_dosen' => session()->get('nama_dosen'),
            'role_dosen' => session()->get('role_dosen'),
            'email_dosen' => session()->get('email_dosen'),
            'nidn_dosen' => session()->get('nidn_dosen'),
            'luaran' => $LuaranModel,
            'validasi' => $validasi
        ];



        echo view('section/head',$data);
        echo view('section/sidebar',$data);
        echo view('penelitian/listJurnalDosen',$data);
        echo view('section/foot',$data);
    }
    public function addLaporanDosen()
    {
       
      if (!$this->validate(
        [      
            'tridharma' => 'required',     
            'judul' => 'required',            
            'sumber' => 'required',
            'dana' => 'required',
            'tahun' => 'required',
            'skala' => 'required',
           
            'pdfku' => 'uploaded[pdfku]|ext_in[pdfku,pdf]'
                             ],
        [            
            'tridharma' => [ 
                'required' => 'Tridharma harus diisi'
            ],
            'judul' => [ 
                'required' => 'Judul harus diisi'
            ],
            'sumber' => [ 
                'required' => 'Sumber dana harus diisi'
            ],
            
            'dana' => [ 
                'required' => 'Dana harus diisi'
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
        return redirect()->to(base_url('penelitian/reportPenelitian'))->withinput();
    
        }
        $td = $this->request->getVar('tridharma');
        
        $today = date("Y-m-d H:i:s");
        $LaporanModel = new LaporanModel();
        $filePend = $this->request->getFile('pdfku');
       
        $filePend->move('laporanDosen');
        $namaFile = $filePend->getName();
        $LaporanModel->save([
          
            
            'id_dosen' => session()->get('id_dosen'),
            'kd_tridharma' => $this->request->getVar('tridharma'),
            'judul' => $this->request->getVar('judul'),
            'sumber' => $this->request->getVar('sumber'),
            'dana' => $this->request->getVar('dana'),
            'skala' => $this->request->getVar('skala'),
            'tahun' => $this->request->getVar('tahun'),
            'file' => $namaFile,
            'created_at' => $today
 
        ]);
        
              
        if ($td == 'penelitian')
        
        {
    
       
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Laporan Penelitian Berhasil Ditambah</div>');
        return redirect()->to(base_url('penelitian/reportPenelitian'));
    } else 
    {
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Laporan Pengabdian Berhasil Ditambah</div>');
        // return redirect()->to(base_url('pengabdian/reportPengabdian'));
        return redirect()->to(base_url('pengabdian/reportPengabdian'));
    }

    }
    public function delLaporanDosen($id,$tujuan)
    {
        
      if ($tujuan == 'pengabdian')
        {
            $akhir = 'pengabdian/listPengabdianDosen';
        } 
        if ($tujuan == 'penelitian') 
        {$akhir = 'penelitian/listPenelitianDosen';} 
        $riwLaporanModel = new LaporanModel();
        $riwLaporanModel->delete($id);
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Laporan Berhasil Dihapus</div>');
       return redirect()->to(base_url($akhir));
    }

    public function addLuaranDosen()
    {
       
      if (!$this->validate(
        [      
            'tridharma' => 'required',     
            'judul' => 'required', 
            'link' => 'required',            
            'sumber' => 'required',
            'dana' => 'required',
            'tahun' => 'required',
            'skala' => 'required',
           
            'pdfku' => 'uploaded[pdfku]|ext_in[pdfku,pdf]'
                             ],
        [            
            'tridharma' => [ 
                'required' => 'Tridharma harus diisi'
            ],
            'judul' => [ 
                'required' => 'Judul harus diisi'
            ],
            'link' => [ 
                'required' => 'Link harus diisi'
            ],
            'sumber' => [ 
                'required' => 'Sumber dana harus diisi'
            ],
            
            'dana' => [ 
                'required' => 'Dana harus diisi'
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
        return redirect()->to(base_url('penelitian/reportJurnal'))->withinput();
    
        }
        $td = $this->request->getVar('tridharma');
        
        $today = date("Y-m-d H:i:s");
        $LaporanModel = new LuaranModel();
        $filePend = $this->request->getFile('pdfku');
       
        $filePend->move('luaranDosen');
        $namaFile = $filePend->getName();
        $LaporanModel->save([
          
            
            'id_dosen' => session()->get('id_dosen'),
            'kd_tridharma' => $this->request->getVar('tridharma'),
            'judul' => $this->request->getVar('judul'),
            'link' => $this->request->getVar('link'),
            'sumber' => $this->request->getVar('sumber'),
            'dana' => $this->request->getVar('dana'),
            'skala' => $this->request->getVar('skala'),
            'tahun' => $this->request->getVar('tahun'),
            'file' => $namaFile,
            'created_at' => $today
 
        ]);
        
              
        if ($td == 'penelitian')
        
        {
    
       
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Laporan Penelitian Berhasil Ditambah</div>');
        return redirect()->to(base_url('penelitian/reportJurnal'));
    } else 
    {
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Laporan Pengabdian Berhasil Ditambah</div>');
        // return redirect()->to(base_url('pengabdian/reportPengabdian'));
        return redirect()->to(base_url('pengabdian/reportJurnalPengabdian'));
    }

    }

    public function delLuaranDosen($id,$tujuan)
    {
        
      if ($tujuan == 'pengabdian')
        {
            $akhir = 'pengabdian/listJurnalPengabdian';
        } 
        if ($tujuan == 'penelitian') 
        {$akhir = 'penelitian/listJurnalDosen';} 
        $riwLaporanModel = new LuaranModel();
        $riwLaporanModel->delete($id);
        session()->setFlashdata('msg', '<div class="alert alert-success" role="alert">Luaran Berhasil Dihapus</div>');
       return redirect()->to(base_url($akhir));
    }
}
